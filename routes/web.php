<?php

use App\Http\Controllers\Frontend\VaccineRegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/registration',[VaccineRegistrationController::class , 'registration'])->name('frontend.vaccine.registration');

require __DIR__.'/backend.php';

require __DIR__.'/auth.php';
