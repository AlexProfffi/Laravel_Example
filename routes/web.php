<?php

use Illuminate\Support\Facades\Route;



// -------- Example ----------

Route::get('/', function () {

    return redirect()->route('example');
});

Route::get('/example', function () {

    return view('pages.example');

})->name('example');

Route::get('/example1', function () {

    return view('pages.example1');

})->name('example1');
