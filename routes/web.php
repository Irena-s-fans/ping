<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LocaleController;
use App\Models\Project;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('welcome', ['projects' => Project::all()->where('is_eng', App::currentLocale() == 'en' ? 1 : 0)]);
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

    Route::get('projects/all', [\App\Http\Controllers\ProjectsController::class, 'index']);

    Route::get('projects/new', function() {
        return view('project_add');
    });

    Route::post('projects/add', [\App\Http\Controllers\ProjectsController::class, 'add']);

    Route::get('projects/edit/{projectID}', [\App\Http\Controllers\ProjectsController::class, 'edit']);

    Route::post('projects/edit/project_edit', [\App\Http\Controllers\ProjectsController::class, 'projectEdit']);

    Route::post('projects/delete', [\App\Http\Controllers\ProjectsController::class, 'delete']);
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
