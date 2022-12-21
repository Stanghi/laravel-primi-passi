<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $saluto = "Hi";
    $user = "Stanghi";
    $colors = ['red', 'green', 'blue', 'yellow', 'violet'];

    return view('home', compact('saluto', 'user', 'colors'));
});

Route::get('/about', function () {
    $team = [
        [
            'name' => 'Mattia',
            'surname' => 'Stangherlin',
            'email' => 'mattia@gmail.com'
        ],
        [
            'name' => 'Andre',
            'surname' => 'Rossi',
            'email' => 'andrea@gmail.com'
        ],
        [
            'name' => 'Marco',
            'surname' => 'Verdi',
            'email' => 'marco@gmail.com'
        ],
    ];

    return view('about', compact('team'));
});
