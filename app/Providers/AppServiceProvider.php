<?php

namespace App\Providers;

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
