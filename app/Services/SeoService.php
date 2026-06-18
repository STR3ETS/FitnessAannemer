<?php

namespace App\Services;

use App\Models\SeoMetadata;

class SeoService
{
    public function getForCurrentRequest(): ?SeoMetadata
    {
        $path = request()->getPathInfo();

        return SeoMetadata::findByPath($path);
    }
}
