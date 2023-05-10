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

    return view('home', compact('comics'), compact('links'));
})->name('home');


Route::get('description', function () {

    $comics = config('comics.single');


    return view('description', compact('comics'));
})->name('description');
