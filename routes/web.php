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

Route::get('/home', function () {
    return view('/fr/footer/footer');
});

Route::get('/', function () {
    return view('/fr/index');
})->name('home');

Route::get('/mot_du_president', function () {
    return view('/fr/apropos/motdupresident/motdupresident');
})->name('motdupresident');

Route::get('/historique', function () {
    return view('/fr/apropos/historique/historique');
})->name('historique');

Route::get('/cooperative', function () {
    return view('/fr/apropos/cooperative/cooperative');
})->name('cooperative');


Route::get('/archieves', function () {
    return view('/fr/archieves/archieves');
})->name('archieves');

Route::get('/contact', function () {
    return view('/fr/contact/contact');
})->name('contact');

Route::get('/contac', function () {
    return view('/fr/contact/contact');
})->name('contact');
