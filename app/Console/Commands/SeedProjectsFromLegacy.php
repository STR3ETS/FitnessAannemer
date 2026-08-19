<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;

class SeedProjectsFromLegacy extends Command
{
    protected $signature = 'projects:seed-from-legacy';
    protected $description = 'Seed projects table from the hardcoded PageController array';

    public function handle(): int
    {
        $controller = new \App\Http\Controllers\PageController();
        $reflection = new \ReflectionClass($controller);
        $prop = $reflection->getProperty('projecten');
        $allData = $prop->getValue($controller);

        $projectSlugs = [
            'pt024-nijmegen', 'ballin-fit-amsterdam', 'vitality-sports-duiven',
            'upshape-gym-den-haag', 'farm-fit-culemborg', 'de-krachtfabriek-huissen',
            'mana-eindhoven', 'fitt-roden', 'ona-gym-vught', 'building-you-etten-leur',
            'incircle-waalwijk', 'fit2lead-gouda', 'fitcore-breda',
            'fit-met-michael-ridderkerk', 'piazza-sports-houten',
            'sportcentrum-pleizier-amsterdam-zuidoost', 'bent-sports-zevenaar',
            'ketelaar-sports-ulft', 'elevate-the-gym-nuenen',
            'mossink-elektrotechniek-hoevelaken', 'studio-dansu-huizen',
            'axon-healthclub', 'base-lifestyle', 'bloom-and-reform', 'brilliant',
            'club-confidence', 'donny-roelvink', 'get-real-performance',
            'gym-boutique-pittem', 'gym-steenwijk', 'hotel-kavel-v-utrecht',
            'house-of-fitness', 'kaj-prins', 'oldambt', 'pt-factory',
            'raoul-de-graaf', 'reichwein-pt', 'sportcentrum-de-kloek',
            'the-kube', 'yourwaypt',
        ];

        $count = 0;
        foreach ($projectSlugs as $i => $slug) {
            if (!isset($allData[$slug])) {
                $this->warn("Slug not found: {$slug}");
                continue;
            }

            if (Project::where('slug', $slug)->exists()) {
                $this->line("Skipping (exists): {$slug}");
                continue;
            }

            $p = $allData[$slug];

            $sections = [
                [
                    'label' => $p['introLabel'] ?? '',
                    'title' => $p['introTitle'] ?? '',
                    'p1' => $p['introP1'] ?? '',
                    'p2' => $p['introP2'] ?? '',
                    'media' => $p['media1'] ?? '',
                ],
                [
                    'label' => $p['midLabel'] ?? '',
                    'title' => $p['midTitle'] ?? '',
                    'p1' => $p['midP1'] ?? '',
                    'p2' => $p['midP2'] ?? '',
                    'media' => $p['mediaMid'] ?? '',
                ],
                [
                    'label' => $p['section3Label'] ?? '',
                    'title' => $p['section3Title'] ?? '',
                    'p1' => $p['section3P1'] ?? '',
                    'p2' => $p['section3P2'] ?? '',
                    'media' => $p['media3'] ?? '',
                ],
            ];

            if (!empty($p['extraSections'])) {
                foreach ($p['extraSections'] as $extra) {
                    $sections[] = [
                        'label' => $extra['label'] ?? '',
                        'title' => $extra['title'] ?? '',
                        'p1' => $extra['paragraphs'][0] ?? '',
                        'p2' => $extra['paragraphs'][1] ?? '',
                        'media' => $extra['media'] ?? '',
                    ];
                }
            }

            Project::create([
                'slug' => $slug,
                'title' => $p['title'],
                'meta_desc' => $p['metaDesc'] ?? null,
                'type' => $p['type'] ?? null,
                'size' => $p['size'] ?? null,
                'location' => $p['location'] ?? null,
                'card_desc' => $p['cardDesc'] ?? null,
                'card_image' => $p['cardImage'] ?? null,
                'hero_title' => $p['heroTitle'] ?? null,
                'hero_desc' => $p['heroDesc'] ?? null,
                'sections' => $sections,
                'merken' => $p['merken'] ?? [],
                'highlights' => $p['highlights'] ?? [],
                'is_published' => true,
                'sort_order' => $i,
            ]);

            $count++;
            $this->info("Seeded: {$slug}");
        }

        $this->info("Done. Seeded {$count} projects.");
        return Command::SUCCESS;
    }
}
