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

Route::get('/','PhraseAnalyseController@index')->name('home');
Route::get('/analyse',function(){
    return redirect('/');
});
Route::post('/analyse','PhraseAnalyseController@phraseAnalyser')->name('analyse_phrase');

Route::get('clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('storage:link');
    return ('done');
});