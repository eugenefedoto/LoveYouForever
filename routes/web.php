<?php

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
    return view('index');
});

Route::get('/tsukasa-ayatsuji', function () {
    return view('tsukasa-ayatsuji');
});

Route::get('/rihoko-sakurai', function () {
    return view('rihoko-sakurai');
});

Route::get('/sae-nakata', function () {
    return view('sae-nakata');
});

Route::get('/kaoru-tanamachi', function () {
    return view('kaoru-tanamachi');
});

Route::get('/haruka-morishima', function () {
    return view('haruka-morishima');
});

Route::get('/ai-nanasaki', function () {
    return view('ai-nanasaki');
});