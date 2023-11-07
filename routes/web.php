<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    $locale = request()->session()->get('locale');
    if (!isset($locale) || $locale == null) {
        $locale = 'dutch';
    }
    App::setLocale($locale);
    return view('homePage.home');
})->name('home');

Route::get('/groepen', function () {
    $locale = request()->session()->get('locale');
    if (!isset($locale) || $locale == null) {
        $locale = 'dutch';
    }
    App::setLocale($locale);
    return view('homePage.groups');
})->name('groepen');

Route::get('/contact', function () {
    $locale = request()->session()->get('locale');
    if (!isset($locale) || $locale == null) {
        $locale = 'dutch';
    }
    App::setLocale($locale);
    return view('contact');
})->name('contact');

Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('send-contact');

Route::post('/set-locale', [HomeController::class, 'setLocale'])->name('setLocale');
