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

route::view('/','welcome');
route::view('/a-propos','a-propos')->name('a-propos');

 


route::resource('clients','ClientsController');
route::get('contact','ContactController@create');
route::post('contact','ContactController@store');
































































































//clients routes
// route::get('/clients','ClientsController@index');
// route::get('/clients/create','ClientsController@create');
// route::post('/clients','ClientsController@store');
// route::get('/clients/{id}','ClientsController@show');
// route::get('/clients/{client}/edit','ClientsController@edit');
// route::patch('/clients/{client}','ClientsController@update');
// route::delete('/clients/{client}','ClientsController@destroy');