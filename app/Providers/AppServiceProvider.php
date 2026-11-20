<?php

namespace App\Providers;

use App\Services\PaginaTeksten;
use App\Services\SeoService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(SeoService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share $seo variable with all views
        View::composer('*', function ($view) {
            if (! isset($view->seo)) {
                $seo = app(SeoService::class)->getForCurrentRequest();
                $view->with('seo', $seo);
            }
        });

        // Teksten die InSpace via EazyDash op de vaste pagina's aanpast. De lijst
        // met velden geeft zijn eigen opname en SEO-gegevens mee; anders horen ze
        // bij dit adres. Een aangepaste titel gaat voor die uit het beheer.
        View::composer(['apparatuur._template', 'oplossingen._template', 'diensten.*'], function ($view) {
            $data = $view->getData();
            $teksten = $data['teksten'] ?? PaginaTeksten::voor(request()->getPathInfo());
            $seo = array_key_exists('seo', $data) ? $data['seo'] : app(SeoService::class)->getForCurrentRequest();

            $view->with(['teksten' => $teksten, 'seo' => $teksten->metSeo($seo)]);
        });

        // Een artikel of dienst van InSpace op een adres dat in het beheer nog de
        // titel, omschrijving en schema van het oude artikel heeft (een herschreven
        // vast artikel): wat bij de tekst van InSpace hoort gaat voor. Zonder eigen
        // titel van InSpace geldt die van de pagina zelf, niet de oude.
        View::composer('content.pagina', function ($view) {
            $data = $view->getData();
            $seo = array_key_exists('seo', $data) ? $data['seo'] : app(SeoService::class)->getForCurrentRequest();

            if (! $seo) {
                return;
            }

            $seo = clone $seo;
            $pagina = (array) ($data['pagina'] ?? []);
            $seo->meta_title = filled($pagina['meta_title'] ?? null) ? $pagina['meta_title'] : null;
            $seo->meta_description = filled($pagina['meta_description'] ?? null) ? $pagina['meta_description'] : null;
            $seo->og_title = null;
            $seo->og_description = null;
            $seo->og_image = null;
            $seo->schema_markup = null;

            $view->with('seo', $seo);
        });

        // Custom Blade directives for SEO with database-first, @section fallback
        Blade::directive('seoTitle', function ($expression) {
            return "<?php echo e(\$seo?->meta_title ?? \$__env->yieldContent('title', $expression)); ?>";
        });

        Blade::directive('seoDescription', function ($expression) {
            return "<?php echo e(\$seo?->meta_description ?? \$__env->yieldContent('meta_description', $expression)); ?>";
        });

        Blade::directive('seoOgTitle', function ($expression) {
            return "<?php echo e(\$seo?->og_title ?? \$seo?->meta_title ?? \$__env->yieldContent('title', $expression)); ?>";
        });

        Blade::directive('seoOgDescription', function ($expression) {
            return "<?php echo e(\$seo?->og_description ?? \$seo?->meta_description ?? \$__env->yieldContent('meta_description', $expression)); ?>";
        });

        Blade::directive('seoOgImage', function ($expression) {
            return "<?php echo e((\$seo?->og_image) ? asset('storage/' . \$seo->og_image) : \$__env->yieldContent('og_image', $expression)); ?>";
        });

        Blade::directive('seoSchema', function () {
            return "<?php if(\$seo?->schema_markup): echo \$seo->schema_markup; else: echo \$__env->yieldContent('schema'); endif; ?>";
        });
    }
}
