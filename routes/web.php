<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
