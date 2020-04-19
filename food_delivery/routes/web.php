<?php

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
Route::get('/signup','Controller@signup');
Route::get('/login','Controller@login');
Route::get('/dashboard','Controller@display');
Route::post('/save_customer','Controller@storeCustomer');
Route::post('/verify','Controller@varifyLogin');
