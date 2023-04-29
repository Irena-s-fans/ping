<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
})->middleware(\App\Http\Middleware\LocaleMiddleware::class);

Route::get('/locale/{key}', function ($key) {
    Session::put('locale', $key);
    return redirect()->back();
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
    Route::get('/projects/all', [App\Http\Controllers\ProjectsController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
