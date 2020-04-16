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
    return redirect('/carousel');
});
Route::get('/carousel', function () {
    return view('carousel');
});
Route::get('/lodash-example', function () {
    return view('lodash-example');
});
Route::get('/portal-example', function () {
    return view('portal-example');
});
Route::get('/accordian-example', function () {
    $items = collect(
        [
            ['title' => 'title 1', 'body' => 'body 1'],
            ['title' => 'title 2', 'body' => 'body 2']
        ]
    );
    return view('accordian-example', compact('items'));
});
