<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\Admin\AnnexeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ActiviteController;
use App\Http\Controllers\Admin\PartenaireController;
use App\Http\Controllers\Admin\TemoignageController;
use App\Http\Controllers\ApointmentController;

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

Route::get('accueil', [HomeController::class, 'index'])->name('accueil');
Route::get('/', [HomeController::class, 'index']);
Route::get('annexes/all', [HomeController::class, 'annexe_index'])->name('annexe');

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
Route::resource('apointments', ApointmentController::class);
Route::post('/storeApointment', [ApointmentController::class, 'store'])->name('storeApointment');


Route::get('contact', [ContactMailController::class, 'create'])->name('contact');
Route::post('contact', [ContactMailController::class, 'store'])->name('contact-store');


Route::post('/save', [HomeController::class, 'save'])->name('save');
