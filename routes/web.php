<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\API\CandidateController;
use App\Http\Controllers\API\DocumentoCandidatoController;
use App\Http\Controllers\API\ExperienciaLaboralController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\CompetenciaController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'layouts.contact')->name('contact');

Route::view('/cookies', 'layouts.cookies')->name('cookies');

Route::view('/privacy', 'layouts.privacy_policy')->name('privacy_policy');

Route::view('/safety', 'layouts.safety_security')->name('safety_security');

Route::view('/customers', 'layouts.customers')->name('customers');

Route::view('/price', 'layouts.price')->name('price');

Route::view('/help', 'layouts.help')->name('help');

Route::view('/associates', 'layouts.associates')->name('associates');

Route::view('/employment', 'layouts.employment')->name('employment');

Route::view('/applicantTrackingSystem', 'layouts.applicantTrackingSystem')->name('applicantTrackingSystem');

Route::view('/aTSforlargecompanies', 'layouts.aTSforlargecompanies')->name('aTSforlargecompanies');

Route::view('/aTSforSmes', 'layouts.aTSforSmes')->name('aTSforSmes');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('candidates', CandidateController::class);

Route::prefix('candidates/{candidate}')->group(function () {
    Route::resource('documentos', DocumentoCandidatoController::class)->except(['show']);
    Route::resource('experiencias', ExperienciaLaboralController::class)->except(['show']);
    Route::resource('educaciones', EducationController::class)->except(['show']);
    Route::resource('competencias', CompetenciaController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
