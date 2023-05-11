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

    $comics = config('comics.single');

    $links = config('comics.links');

    $navs = config('comics.nav-links');

    $navRoutes = config('comics.nav-route');

    $icons = config('comics.icons-array');

    return view('comics', compact('comics', 'links', 'navs', 'icons', 'navRoutes'));
})->name('comics');


Route::get('characters', function () {

    $comics = config('comics.single');

    $links = config('comics.links');

    $navs = config('comics.nav-links');

    $navRoutes = config('comics.nav-route');

    $icons = config('comics.icons-array');

    return view('characters', compact('comics', 'links', 'navs', 'icons', 'navRoutes'));
})->name('characters');
