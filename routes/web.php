<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnnexeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ActiviteController;
use App\Http\Controllers\Admin\PartenaireController;
use App\Http\Controllers\Admin\TemoignageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.accueil');
});

Route::get('accueil', function(){
    return view('front.accueil');
})->name('accueil');

Route::get('about', function(){
    return view('front.about');
})->name('about');

Route::get('contact', function(){
    return view('front.contact');
})->name('contact');

Route::get('equipe', function(){
    return view('front.equipe');
})->name('equipe');

Route::get('activite', function(){
    return view('front.activite');
})->name('activite');

Route::get('rendez-vous', function(){
    return view('front.rendezVous');
})->name('rendez-vous');

Route::get('annexe', function(){
    return view('front.annexes');
})->name('annexe');
Route::get('mediatheque', function(){
    return view('front.mediatheque');
})->name('mediatheque');

Route::get('dashboard', function(){
    return view('Admin.Dashboard');
})->name('dashboard');


Route::resource('activites', ActiviteController::class);
Route::resource('services', ServiceController::class);
Route::resource('partenaires', PartenaireController::class);
Route::resource('temoignages', TemoignageController::class);
Route::resource('activites', ActiviteController::class);
Route::resource('annexes', AnnexeController::class);
