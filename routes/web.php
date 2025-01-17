<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', function () {
    return "halo selamat datang";
});

Route::get('/hallo/apakabar', function () {
    return "selamat datang, halo apa kabar";
});

Route::get('/hallo/{nama}', function ($nama) {
    return "halo {$nama} apa kabar";
});
