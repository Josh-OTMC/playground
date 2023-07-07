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
    return view('welcome');
});

Route::get('/slider', function () {
    return view('slider');
});

Route::get('/slider_2', function () {
    return view('slider_2');
});

Route::get('/slider_3', function () {
    return view('slider_3');
});

Route::get('/hover_2', function () {
    return view('hover_2');
});

Route::get('/hover_3', function () {
    return view('hover_3');
});

Route::get('/hover', function () {
    return view('hover');
});

Route::get('/temp', function () {
    return view('temp');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/video_slider', function () {
    return view('video_slider');
});

Route::get('/hover_effect', function () {
    return view('hover_effect');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/available-on', function () {
    return view('available_on');
});

Route::get('/test', function () {
    return view('test');
});