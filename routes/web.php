<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApointmentController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\Admin\AnnexeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ActiviteController;
use App\Http\Controllers\Admin\PartenaireController;
use App\Http\Controllers\Admin\TemoignageController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfileController;


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




Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('seeder', function(){
    Artisan::call('db:seed');
});

Route::get('optimize',function(){
    Artisan::call('cache:clear');
    Artisan::call('optimize');
    dd("Cache is cleared");
});

Route::get('/migrate', function(){
    Artisan::call('migrate');
    dd('migrated!');
});



Route::get('accueil', [HomeController::class, 'index'])->name('accueil');
Route::get('/', [HomeController::class, 'index']);
Route::get('annexes/all', [HomeController::class, 'annexe_index'])->name('annexe');

Route::post('validate_paiement', [HomeController::class, 'validate_paiement'])->name('validate_paiement');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('contact', function(){
    return view('front.contact');
})->name('contact');

Route::get('equipe', function(){
    return view('front.equipe');
})->name('equipe');


Route::get('toutes-les-activites', [ActiviteController::class, 'all_activites'])->name('all-activities');
Route::get('tous-les-services', [ActiviteController::class, 'all_services'])->name('all-services');
Route::get('tous-les-dons', [DonController::class, 'index'])->name('all-dons');

Route::get('mediatheque', [MediaController::class, 'mediatheque'])->name('mediatheque');



Route::middleware('auth')->group(function () {
    Route::resource('temoignages', TemoignageController::class);
    Route::resource('medias', MediaController::class);
    Route::resource('activites', ActiviteController::class);
    Route::resource('annexes', AnnexeController::class);
    Route::resource('activites', ActiviteController::class);
    Route::resource('services', ServiceController::class);

    // Auth routh
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('partenaires', PartenaireController::class);


Route::resource('apointments', ApointmentController::class);
Route::post('/storeApointment', [ApointmentController::class, 'store'])->name('storeApointment');
Route::post('/storeDon', [DonController::class, 'store'])->name('storeDon');
Route::post('/storePartenariat', [PartenaireController::class, 'store'])->name('storePartenariat');


Route::get('contact', [ContactMailController::class, 'create'])->name('contact');
Route::post('contact', [ContactMailController::class, 'store'])->name('contact-store');


Route::post('/save', [HomeController::class, 'save'])->name('save');
Route::post('/submit_form', [HomeController::class, 'validate_paiement'])->name('submit_form');

Route::get('don', [DonController::class, 'create'])->name('don');
Route::get('typeDon', [DonController::class, 'type_don'])->name('typeDon');
Route::get('partenariat', [PartenaireController::class, 'create'])->name('partenariat');


Route::get('message', [ContactMailController::class, 'index'])->name('messages.index');

Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
