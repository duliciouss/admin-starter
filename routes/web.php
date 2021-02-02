<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/page-one', function () {
    return view('page-one');
})->middleware(['auth'])->name('page-one');

Route::get('/page-two', function () {
    return view('page-two');
})->middleware(['auth'])->name('page-two');

Route::get('/page-three', function () {
    return view('page-one');
})->middleware(['auth'])->name('page-three');

Route::get('/page-four', function () {
    return view('page-four');
})->middleware(['auth'])->name('page-four');

Route::get('/page-five', function () {
    return view('page-five');
})->middleware(['auth'])->name('page-five');

Route::get('/page-six', function () {
    return view('page-six');
})->middleware(['auth'])->name('page-six');

Route::get('/page-seven', function () {
    return view('page-seven');
})->middleware(['auth'])->name('page-seven');

Route::get('/page-eight', function () {
    return view('page-eight');
})->middleware(['auth'])->name('page-eight');

require __DIR__.'/auth.php';