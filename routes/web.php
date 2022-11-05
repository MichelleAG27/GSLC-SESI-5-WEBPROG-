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
    return redirect('/binatang');
});

Route::get('/binatang', function () {
    $binatang =[["A001", "Kijang", 1],
        ["A002", "Buaya", 10],
        ["A003", "Kanguru", 8],
        ["A004", "Panda", 7],
        ["A005", "Harimau", 4],
        ["A006", "Kelinci", 15],
        ["A007", "Kuda", 12]];
    return view('binatang')
        ->with('binatang', $binatang);
});

Route::get('/staff', function () {
    $staff =[["S001", "Rani","Kijang" ],
        ["S002", "Layla", "Buaya"],
        ["S003", "Yeonjun","Kanguru"],
        ["S004", "Ningning", "Panda"],
        ["S005", "Cleo", "Harimau"],
        ["S006", "Wina", "Kelinci"],
        ["S007", "Kevin", "Kuda"]];
    return view('staff')
        ->with('staff', $staff);
});
