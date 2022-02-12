<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Posts
// CRUD
// get all (GET) /api/posts
// create a post (POST) /api/posts
// get a single (GET)   /apic/posts/{id}
// update a single (PUT/PATCH) /api/posts/{id}
// delete (DELETE) /api/posts/{id}


// to create a resource (posts)
// create the database and migrations
// create a model
// create a service --> Eloquent ORM
// create a controller to go get info from the database
// return that info

Route::apiResource('posts', 'PostController');


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
