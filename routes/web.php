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

// using slug in frontend url
Route::get('/{slug}', function($slug) {
    $post = App\Models\Post::whereSlug($slug)->first();

    return view('post', ['post' => $post]);
});
