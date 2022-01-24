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

Route::get('/biodata', function () {
    $data=[
        'nama'=>'Puput Maryam Rahmawati',
        'lahir'=>'Garut, 09 Oktober 2003',
        'hobi'=>'Berenang',
        'jk'=>'Perempuan',
        'agama'=>'Islam',
        'alamat'=>'Komp. Bumi orange blok E7 no 19',
        'telp'=>'089647062396',
        'email'=>'puputmaryam03@gmail.com',
    ];
    return view('biodata',$data);
});