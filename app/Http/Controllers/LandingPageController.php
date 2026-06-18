<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;

class LandingPageController extends Controller
{
    public function show(string $slug)
    {
        $page = LandingPage::published()->where('slug', $slug)->firstOrFail();

        return view('landing-page', compact('page'));
    }
}
