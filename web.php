<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});

Route::view('/problem-solving', 'pages.problem-solving');
Route::view('/computational-thinking', 'pages.computational-thinking');
Route::view('/kreativitas', 'pages.kreativitas');