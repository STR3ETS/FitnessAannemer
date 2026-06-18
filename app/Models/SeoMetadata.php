<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoMetadata extends Model
{
    protected $table = 'seo_metadata';

    protected $fillable = [
        'url_path',
        'page_title',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
        'robots',
        'canonical_url',
        'schema_markup',
    ];

    /**
     * Find SEO metadata for a given URL path, with caching.
     */
    public static function findByPath(string $path): ?self
    {
        $key = 'seo_metadata:' . $path;
        $cached = cache()->get($key);

        if ($cached instanceof self) {
            return $cached;
        }

        // Stale or corrupt cache entry, refresh
        cache()->forget($key);
        $result = static::where('url_path', $path)->first();
        cache()->put($key, $result, now()->addHours(1));

        return $result;
    }

    /**
     * Clear the cache after save/update/delete.
     */
    protected static function booted(): void
    {
        static::saved(function (SeoMetadata $seo) {
            cache()->forget('seo_metadata:' . $seo->url_path);
        });

        static::deleted(function (SeoMetadata $seo) {
            cache()->forget('seo_metadata:' . $seo->url_path);
        });
    }
}
