<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});
Route::get('/comics', function () {
    $links = config('links');
    $comics = config('comics');
    return view('comics', ['links' => $links, 'comics' => $comics]);
});
