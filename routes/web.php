<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::post(
    '/form/send',
    [
        FormController::class, 'form',
    ],
);

Route::post(
    '/form/admin/seo',
    [
        FormController::class, 'seoForm',
    ],
);

Route::post(
    '/form/admin/offers',
    [
        FormController::class, 'offerForm',
    ],
);

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('dashboard', function() {
        return view('dashboard');
    });
    Route::get('offers', function() {
        return view('offers');
    });
    Route::get('seo', function() {
        return view('seo');
    });
    Route::get('/all', [App\Http\Controllers\ProjectsController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
