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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'welcome')->name('welcome');



//  Routing des pages

Route::view('/presentation', 'pages.presentation')->name('fonctionnement');
Route::view('/presentation#securite', 'pages.presentation#securite')->name('securite');

Route::view('/chiffrement/decalage', 'pages.chiffrement.decalage')->name('decalage');
Route::view('/chiffrement/affine', 'pages.chiffrement.affine')->name('affine');
Route::view('/chiffrement/clef', 'pages.chiffrement.clef')->name('clef');
Route::view('/chiffrement/hill', 'pages.chiffrement.hill')->name('hill');

Route::view('/contactez-nous', 'pages.contact')->name('contact');

Route::view('/mon-profil', 'pages.profil')->name('profil');