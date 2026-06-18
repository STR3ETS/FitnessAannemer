<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'sections' => 'array',
        ];
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function getUrl(): string
    {
        return url('/lp/' . $this->slug);
    }
}
