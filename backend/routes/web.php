<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/sample', function () {
    return "This is a sample page from Laravel!";
});
