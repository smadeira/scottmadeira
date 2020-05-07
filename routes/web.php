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
Route::get('/groupfinder', function(){ return view('widgets.groups'); });
Route::get('/groupdetails', function(){ return view('widgets.groupdetails'); });


Route::resource('/contacts', 'ContactController');
Route::resource('/households', 'HouseholdController');

Route::get('/', function () {
    return view('welcome');
});
