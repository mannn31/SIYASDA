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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/profil-yasda', function () {
    return view('pages.profil-yasda', [
        'title' => 'Profil',
        'about' => 'Yayasan Darul Hufadz adalah sebuah yayasan pendidikan berbasis islam yang berletak di Kp. Bojong RT 03 RW 15, Ds. Cipacing, Kec. Jatinangor, Kab. Sumedang 45363. Yayasan Darul Hufadz didirikan pada tahun'
    ]);
});
