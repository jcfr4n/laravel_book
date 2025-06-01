<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/home', HomeController::class)->name('home');

// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show'])->name('cursos.show');

Route::controller(CursoController::class)
    ->prefix('cursos') // Define the prefix for the routes
    ->name('cursos.') // Define the name prefix for the routes
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'dataFormCursos')->name('dataFormCursos');
        Route::get('/create', 'create')->name('create');
        Route::get('/{id}/edit', 'edit')->name('edit');
        // Route::put('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::get('/{curso}', 'show')->name('show');
        Route::get('/{curso}/{categoria?}', 'show')->name('show');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
