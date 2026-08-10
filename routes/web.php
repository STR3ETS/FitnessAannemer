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

// Redirects (old pages → multi-step form)
Route::redirect('/gratis-adviesgesprek', '/vrijblijvend-adviesgesprek', 301);
Route::redirect('/contact', '/vrijblijvend-adviesgesprek', 301);
Route::redirect('/offerte-aanvragen', '/vrijblijvend-adviesgesprek', 301);

// Diensten
Route::view('/diensten', 'diensten.index')->name('diensten');
Route::view('/diensten/turnkey-sportschool-bouwen', 'diensten.turnkey-sportschool-bouwen')->name('diensten.turnkey');
Route::view('/diensten/inrichting-en-planning', 'diensten.inrichting-en-planning')->name('diensten.inrichting');
Route::view('/diensten/levering-en-installatie', 'diensten.levering-en-installatie')->name('diensten.levering');
Route::redirect('/diensten/onderhoud-en-reparaties', '/diensten', 301);
Route::view('/diensten/leasing-en-financiering', 'diensten.leasing-en-financiering')->name('diensten.leasing');

// Projecten
Route::get('/projecten', [PageController::class, 'projectOverview'])->name('projecten');
Route::get('/projecten/{slug}', [PageController::class, 'project'])->name('projecten.show');

// Onze merken
Route::view('/onze-merken', 'onze-merken')->name('merken');

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
