<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $con = DB::connection('mysql')->getPdo();
    $name = DB::connection()->getDatabaseName();
    $result = DB::select('select * from test');
    // DB::insert('insert into Tracks (track_ID, track_name) values (?, ?)', array(5, 'song_5'));
    return view('welcome', ['result' => $result]);
});
