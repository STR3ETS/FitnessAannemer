<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'stijn@fitnessaannemer.nl'],
            [
                'name' => 'Stijn',
                'password' => bcrypt(env('ADMIN_PASSWORD', 'FitnessAdmin2026!')),
            ]
        );

        $this->call([
            SeoMetadataSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
