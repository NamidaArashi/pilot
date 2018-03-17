<?php

use App\Content;
use App\Category;
use App\Product;

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

Route::get('{tag}', function ($tag) {
    $products = Product::where('categ_tag', $tag)->get()->sort();
    $title = Category::where('tag', $tag)->first()->value('title');
    $intro = Content::where([
                          ['categ_tag', $tag],
                          ['type', 'intro'],
                      ])->first();
    $contents = Content::where([
                            ['categ_tag', $tag],
                            ['type', 'content'],
                        ])->get()->sort();

    return view('category', compact('products', 'title', 'intro', 'contents'));
});
