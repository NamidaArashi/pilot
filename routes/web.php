<?php

use App\Content;
use App\Category;
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
    $categories = Category::all()->sort();

    return view('index', compact('categories'));
});

Route::get('blog/{tag}', function ($tag) {

    $contents = Content::where('tag', $tag)->get();
    return view('blog', compact('contents'));
});
