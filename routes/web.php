<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gratis-adviesgesprek', [ContactController::class, 'show'])->name('contact.show');
Route::post('/gratis-adviesgesprek', [ContactController::class, 'submit'])->name('contact.submit');

// Over ons
Route::view('/over-ons', 'over-ons')->name('over-ons');

// Legal pages
Route::view('/privacybeleid', 'privacybeleid')->name('privacybeleid');
Route::view('/algemene-voorwaarden', 'algemene-voorwaarden')->name('algemene-voorwaarden');
Route::view('/cookies', 'cookies')->name('cookies');

// Contact
Route::view('/contact', 'contact-pagina')->name('contact');

// Offerte aanvragen
Route::view('/offerte-aanvragen', 'offerte-aanvragen')->name('offerte');
Route::post('/offerte-aanvragen', [ContactController::class, 'submitOfferte'])->name('offerte.submit');

// Diensten
Route::view('/diensten', 'diensten.index')->name('diensten');
Route::view('/diensten/inrichting-en-planning', 'diensten.inrichting-en-planning')->name('diensten.inrichting');
Route::view('/diensten/levering-en-installatie', 'diensten.levering-en-installatie')->name('diensten.levering');
Route::view('/diensten/onderhoud-en-reparaties', 'diensten.onderhoud-en-reparaties')->name('diensten.onderhoud');
Route::view('/diensten/leasing-en-financiering', 'diensten.leasing-en-financiering')->name('diensten.leasing');

// Projecten
Route::get('/projecten', [PageController::class, 'projectOverview'])->name('projecten');
Route::get('/projecten/{slug}', [PageController::class, 'project'])->name('projecten.show');

// Onze merken
Route::view('/onze-merken', 'onze-merken')->name('merken');

// Oplossingen (via PageController met shared template)
Route::get('/sportschool-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'sportschool')->name('oplossingen.sportschool');
Route::get('/pilates-studio-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'pilates-studio')->name('oplossingen.pilates');
Route::get('/pt-studio-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'pt-studio')->name('oplossingen.pt-studio');
Route::get('/hotel-gym-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'hotel-gym')->name('oplossingen.hotel');
Route::get('/wellnessruimte-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'wellnessruimte')->name('oplossingen.wellness');
Route::get('/boksruimte-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'boksruimte')->name('oplossingen.boks');
Route::get('/homegyms-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'homegyms')->name('oplossingen.homegym');
Route::get('/crossfit-box-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'crossfit-box')->name('oplossingen.crossfit');
Route::get('/bedrijfsfitness-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'bedrijfsfitness')->name('oplossingen.bedrijfsfitness');
Route::get('/hyrox-box-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'hyrox-box')->name('oplossingen.hyrox');
Route::get('/recovery-ruimte-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'recovery-ruimte')->name('oplossingen.recovery');
Route::get('/groepsfitness-ruimte-inrichten', [PageController::class, 'oplossing'])->defaults('slug', 'groepsfitness')->name('oplossingen.groepsfitness');

// Apparatuur
Route::view('/apparatuur', 'apparatuur.index')->name('apparatuur');
Route::get('/apparatuur/collecties', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'collecties')->name('apparatuur.collecties');
Route::get('/apparatuur/cardio', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'cardio')->name('apparatuur.cardio');
Route::get('/apparatuur/krachtapparatuur', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'krachtapparatuur')->name('apparatuur.kracht');
Route::get('/apparatuur/apparatuur-functioneel', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'functioneel')->name('apparatuur.functioneel');
Route::get('/apparatuur/gewichten', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'gewichten')->name('apparatuur.gewichten');
Route::get('/apparatuur/flooring', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'flooring')->name('apparatuur.flooring');
Route::get('/apparatuur/herstel', [PageController::class, 'apparatuurCategorie'])->defaults('slug', 'herstel')->name('apparatuur.herstel');

// Fitnesswijzer
Route::view('/fitnesswijzer', 'fitnesswijzer.index')->name('fitnesswijzer');
Route::get('/fitnesswijzer/gym-verdienmodellen', [PageController::class, 'verdienmodellenOverview'])->name('fitnesswijzer.verdienmodellen');
Route::get('/fitnesswijzer/gym-verdienmodellen/{slug}', [PageController::class, 'verdienmodel'])->name('fitnesswijzer.verdienmodellen.show');
Route::get('/fitnesswijzer/tips-en-inspiratie', [PageController::class, 'tipsOverview'])->name('fitnesswijzer.tips');
Route::get('/fitnesswijzer/tips-en-inspiratie/{slug}', [PageController::class, 'tip'])->name('fitnesswijzer.tips.show');
Route::get('/fitnesswijzer/gymreviews', [PageController::class, 'gymreviewsOverview'])->name('fitnesswijzer.reviews');
Route::get('/fitnesswijzer/gymreviews/{slug}', [PageController::class, 'gymreview'])->name('fitnesswijzer.reviews.show');
