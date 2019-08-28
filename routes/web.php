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

Auth::routes();

Route:: get('/admin', function(){
    return view('admin');
});



Route::post('/login/custom', [
    'uses'=> 'LoginController@login',
    'as'=> 'login.custom'
]);

Route::group(['middleware'=>'auth'], function(){

Route::get('/home', 'HomeController@index')->name('home'); // <------
    // Route::get('/home', function(){
    //    return view ('home');
    // })->name('home'); // <-------

    Route::get('/admin', function(){
        return view ('admin');
    })->name('admin');
});


Route::get('/roles/company', 'CompanyController@index')->name('roles.company');

Route::get('/roles/job', 'JobController@index')->name('roles.job.index');
Route::Post('/roles/save', 'JobController@save')->name('roles.save');
Route::get('/roles/list', 'JobController@list')->name('roles.job.list');
Route::get('/roles/{id}/delete', 'JobController@delete')->name('roles.delete');
