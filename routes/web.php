<?php

use Illuminate\Support\Facades\DB;
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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog/{details}', function(){

    return view('pages.blog-details');
});

Route::get('/blog', function () {
    $posts = DB::table('posts')->get();
    return view('pages.blog', ['posts' => $posts]);
});



Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/project', function () {
    return view('pages.portfolio');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


