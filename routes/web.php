<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render("Home/Index");
});

Route::get('/players', function () {
    return Inertia::render("Players/Index");
});

Route::get('/reports', function () {
    return Inertia::render("Reports/Index");
});

Route::get('/appeals', function () {
    return Inertia::render("Appeals/Index");
});

Route::get('/settings', function () {
    return Inertia::render("Home/Index");
});
