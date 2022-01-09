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
    $series_build_an_app = $series['build_an_app'];
    $series_master_editor = $series['master_editor'];
    $series_learn_a_tool = $series['learn_tool'];
    $series_grow_TALL = $series['grow_TALL'];
    $series_more_recently = $series['more_recently_updated'];
    $series_dont_forget = $series['dont_forget'];
    $series_trending = $series['trending_series'];
    $series_whats_new = $series['whats_new'];
    $series_level_up = $series['level_up'];
    $series_explore = $series['explore_topics'];
    return view('index', compact('series', 'series_updated', 'series_oop', 'series_new', 'series_learn', "series_featured", 'series_build_an_app', 'series_master_editor', 'series_learn_a_tool', 'series_grow_TALL', "series_more_recently", 'series_dont_forget', 'series_trending', 'series_whats_new', 'series_level_up', 'series_explore'));
})->name('series');
