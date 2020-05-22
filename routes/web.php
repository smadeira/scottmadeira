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
Route::get('/groupdetails2', function(){ return view('widgets.groupdetails-with-signup'); });
Route::get('/eventfinder', function(){ return view('widgets.events'); });
Route::get('/visit', function(){ return view('widgets.planvisit'); });
Route::get('/myhousehold', function(){ return view('widgets.myhousehold'); });
Route::get('/mysubscriptions', function(){ return view('widgets.mysubscriptions'); });

Route::resource('/contacts', 'ContactController');
Route::resource('/households', 'HouseholdController');

Route::get('/', function () {
    return view('welcome2');
});
