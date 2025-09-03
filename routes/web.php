<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anin', function () {
    return view('anin.index', ["greeting" => "hello"]);
});