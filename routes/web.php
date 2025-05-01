<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wedding', function () {
    return view('wedding');
})->name('wedding');