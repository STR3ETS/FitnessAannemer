<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vrijblijvend-adviesgesprek', [ContactController::class, 'show'])->name('contact.show');
Route::post('/vrijblijvend-adviesgesprek', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/bedankt/{dienst}', [ContactController::class, 'bedankt'])->name('bedankt');

// Over ons
Route::view('/over-ons', 'over-ons')->name('over-ons');

// Legal pages
Route::view('/privacybeleid', 'privacybeleid')->name('privacybeleid');
Route::view('/algemene-voorwaarden', 'algemene-voorwaarden')->name('algemene-voorwaarden');
Route::view('/cookies', 'cookies')->name('cookies');

// Offerte
Route::post('/offerte-aanvragen', [ContactController::class, 'submitOfferte'])->name('offerte.submit');

// Redirects (old WordPress pages → new Laravel routes)
Route::redirect('/gratis-adviesgesprek', '/vrijblijvend-adviesgesprek', 301);
Route::redirect('/contact', '/vrijblijvend-adviesgesprek', 301);
Route::redirect('/offerte-aanvragen', '/vrijblijvend-adviesgesprek', 301);
Route::redirect('/adviesgesprek', '/vrijblijvend-adviesgesprek', 301);
Route::redirect('/welkom-bij-fitnessaannemer', '/', 301);
Route::redirect('/onze-aanpak', '/diensten/turnkey-sportschool-bouwen', 301);
Route::redirect('/sportschool-starten', '/fitnesswijzer/tips-en-inspiratie', 301);
Route::redirect('/hotels-en-hospitality', '/hotel-gym-inrichten', 301);
Route::redirect('/boutique-gym-inrichten', '/pt-studio-inrichten', 301);
Route::redirect('/apparatuur-2', '/apparatuur', 301);
Route::redirect('/bedankt-adviesgesprek', '/bedankt/adviesgesprek', 301);
Route::redirect('/bedankt-offerte', '/bedankt/offerte', 301);
Route::view('/bedankt-ebook', 'bedankt-ebook')->name('bedankt-ebook');
Route::redirect('/e-book-start-je-eigen-sportschool', '/fitnesswijzer', 301);
Route::redirect('/e-book-start-je-eigen-reformer-pilates-studio', '/fitnesswijzer', 301);
Route::redirect('/e-book-hoe-blijf-je-als-sportschool-relevant-in-een-snel-veranderende-fitnessmarkt', '/fitnesswijzer', 301);
Route::redirect('/e-book-verzekering-sportschool', '/fitnesswijzer', 301);
Route::redirect('/farm-fit-culemborg', '/projecten/farm-fit-culemborg', 301);

// Diensten
Route::view('/diensten', 'diensten.index')->name('diensten');
Route::view('/diensten/turnkey-sportschool-bouwen', 'diensten.turnkey-sportschool-bouwen')->name('diensten.turnkey');
Route::view('/diensten/inrichting-en-planning', 'diensten.inrichting-en-planning')->name('diensten.inrichting');
Route::view('/diensten/levering-en-installatie', 'diensten.levering-en-installatie')->name('diensten.levering');
Route::redirect('/diensten/onderhoud-en-reparaties', '/diensten', 301);
Route::view('/diensten/leasing-en-financiering', 'diensten.leasing-en-financiering')->name('diensten.leasing');

// Oude WordPress diensten subpaginas → parent
Route::redirect('/diensten/inrichting-en-planning/{any}', '/diensten/inrichting-en-planning', 301)->where('any', '.*');
Route::redirect('/diensten/leasing-en-financiering/{any}', '/diensten/leasing-en-financiering', 301)->where('any', '.*');

// Projecten
Route::get('/projecten', [PageController::class, 'projectOverview'])->name('projecten');
Route::redirect('/projecten/ballin-fit-amsterdam-luxe-gym', '/projecten/ballin-fit-amsterdam', 301);
Route::redirect('/projecten/project-pt024-boutique-gym', '/projecten', 301);
Route::redirect('/projecten/vitality-sports-duiven', '/projecten', 301);
Route::get('/projecten/{slug}', [PageController::class, 'project'])->name('projecten.show');

// Onze merken
Route::view('/onze-merken', 'onze-merken')->name('merken');
Route::redirect('/onze-merken/{any}', '/onze-merken', 301)->where('any', '.*');

// Oplossingen
Route::view('/oplossingen', 'oplossingen.index')->name('oplossingen');
Route::get('/sportschool-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'sportschool')->name('oplossingen.sportschool');
Route::get('/pilates-studio-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'pilates-studio')->name('oplossingen.pilates');
Route::get('/pt-studio-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'pt-studio')->name('oplossingen.pt-studio');
Route::get('/hotel-gym-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'hotel-gym')->name('oplossingen.hotel');
Route::get('/wellnessruimte-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'wellnessruimte')->name('oplossingen.wellness');
Route::get('/homegyms-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'homegyms')->name('oplossingen.homegym');
Route::get('/bedrijfsfitness-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'bedrijfsfitness')->name('oplossingen.bedrijfsfitness');
Route::get('/hyrox-box-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'hyrox-box')->name('oplossingen.hyrox');
Route::redirect('/boksruimte-inrichten', '/oplossingen', 301);
Route::redirect('/crossfit-box-inrichten', '/oplossingen', 301);
Route::redirect('/recovery-ruimte-inrichten', '/oplossingen', 301);
Route::redirect('/groepsfitness-ruimte-inrichten', '/oplossingen', 301);

// Apparatuur
Route::view('/apparatuur', 'apparatuur.index')->name('apparatuur');
Route::get('/apparatuur/collecties', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'collecties')->name('apparatuur.collecties');
Route::get('/apparatuur/cardio', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'cardio')->name('apparatuur.cardio');
Route::get('/apparatuur/krachtapparatuur', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'krachtapparatuur')->name('apparatuur.kracht');
Route::get('/apparatuur/apparatuur-functioneel', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'functioneel')->name('apparatuur.functioneel');
Route::get('/apparatuur/gewichten', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'gewichten')->name('apparatuur.gewichten');
Route::get('/apparatuur/sportvloeren', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'sportvloeren')->name('apparatuur.sportvloeren');
Route::get('/apparatuur/flooring', fn () => redirect('/apparatuur/sportvloeren', 301));
Route::get('/apparatuur/herstel', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'herstel')->name('apparatuur.herstel');
Route::redirect('/apparatuur/vloeren/{any?}', '/apparatuur/sportvloeren', 301)->where('any', '.*');
Route::redirect('/apparatuur/herstel/{any}', '/apparatuur/herstel', 301)->where('any', '.*');
Route::get('/apparatuur/pvc-laminaat-vloeren', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'pvc-laminaat-vloeren')->name('apparatuur.pvc-laminaat-vloeren');
Route::get('/apparatuur/verlichting', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'verlichting')->name('apparatuur.verlichting');
Route::get('/apparatuur/audio', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'audio')->name('apparatuur.audio');
Route::get('/apparatuur/spiegels', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'spiegels')->name('apparatuur.spiegels');
Route::get('/apparatuur/kluisjes', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'kluisjes')->name('apparatuur.kluisjes');
Route::get('/apparatuur/meubels', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'meubels')->name('apparatuur.meubels');

// Fitnesswijzer
Route::view('/fitnesswijzer', 'fitnesswijzer.index')->name('fitnesswijzer');
Route::get('/fitnesswijzer/gym-verdienmodellen', [PageController::class, 'verdienmodellenOverview'])->name('fitnesswijzer.verdienmodellen');
Route::get('/fitnesswijzer/gym-verdienmodellen/{slug}', [PageController::class, 'verdienmodel'])->name('fitnesswijzer.verdienmodellen.show');
Route::get('/fitnesswijzer/tips-en-inspiratie', [PageController::class, 'tipsOverview'])->name('fitnesswijzer.tips');
Route::get('/fitnesswijzer/tips-en-inspiratie/{slug}', [PageController::class, 'tip'])->name('fitnesswijzer.tips.show');
Route::get('/fitnesswijzer/gymreviews', [PageController::class, 'gymreviewsOverview'])->name('fitnesswijzer.reviews');
Route::get('/fitnesswijzer/gymreviews/{slug}', [PageController::class, 'gymreview'])->name('fitnesswijzer.reviews.show');

// Landingspagina's
Route::get('/lp/{slug}', [LandingPageController::class, 'show'])->name('landing-page.show');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Catch-all: oude WordPress wp-content URLs → 404
Route::get('/wp-content/{any}', fn () => abort(404))->where('any', '.*');
Route::get('/wp-admin/{any?}', fn () => abort(404))->where('any', '.*');
Route::get('/wp-login.php', fn () => abort(404));
