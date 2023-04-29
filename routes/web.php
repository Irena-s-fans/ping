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

    Route::get('seo', function() {
        return view('seo');
    });

    Route::get('projects/all', [App\Http\Controllers\ProjectsController::class, 'index']);

    Route::get('projects/new', function() {
        return view('project_add');
    });

    Route::post('projects/add', [App\Http\Controllers\ProjectsController::class, 'add']);

    Route::get('projects/edit/{projectID}', [App\Http\Controllers\ProjectsController::class, 'edit']);

    Route::post('projects/edit/project_edit', [App\Http\Controllers\ProjectsController::class, 'editProject']);

    Route::post('projects/delete', [App\Http\Controllers\ProjectsController::class, 'delete']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
