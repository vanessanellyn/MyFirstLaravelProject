<?php

use Illuminate\Support\Facades\Route;

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
    return view('index', [
        // 'name' => 'Vanessa'
    ]);
});

// Route name
Route::get('/hello', function () {
    return 'Hello';
})->name('hello');

// Dynamic Parts
Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

// Redirect Route
Route::get('/hallo', function () {
    // return redirect('/hello'); // Instead of actual URL, use route name
    return redirect()->route('hello');
});

// Fallback Route - route that will show when URL doesn't match any available routes
Route::fallback(function () {
    return 'Still got somewhere!';    
});