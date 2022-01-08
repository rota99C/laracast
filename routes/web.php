<?php

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
    $series = config('series.data');
    /* riscontrato problema di comunicazione tra rotta e view, unica soluzione trovata e funzionante è la seguente */
    $series_updated = $series['recently_updated'];
    $series_oop = $series['learn_OOP'];
    $series_new = $series['new_to_laracasts'];
    $series_learn = $series['learn_laravel'];
    $series_featured = $series['currently_featured'];
    return view('index', compact('series', 'series_updated', 'series_oop', 'series_new', 'series_learn', "series_featured"));
})->name('series');
