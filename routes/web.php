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
            ['header' => 'title 1', 'content' => '<b>body 1</b>'],
            ['header' => 'title 2', 'content' => '<b>body 2</b>'],
            ['header' => 'title 2', 'content' => '<b>body 2</b>'],
            ['header' => 'title 2', 'content' => '<b>body 2</b>'],
            ['header' => 'title 2', 'content' => '<b>body 2</b>'],
            ['header' => 'title 2', 'content' => '<b>body 2</b>'],
            ['header' => 'title 2', 'content' => '<b>body 2</b>']
        ]
    );
    return view('accordian-example', compact('items'));
});
