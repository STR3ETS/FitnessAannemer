<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'meta_desc',
        'type',
        'size',
        'location',
        'card_desc',
        'card_image',
        'hero_title',
        'hero_desc',
        'sections',
        'merken',
        'highlights',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'sections' => 'array',
        'merken' => 'array',
        'highlights' => 'array',
        'is_published' => 'boolean',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
