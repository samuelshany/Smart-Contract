<?php
use Illuminate\Support\Facades\Route;


   Route::get('/E-contract/Ahome','userController@adminHome');

Route::post('/E-contract/acceptuser/{id}','userController@acceptuser');
Route::post('/E-contract/deleteuser/{id}','userController@deleteuser');

Route::post('/E-contract/acceptcar/{id}','userController@acceptcar');
Route::post('/E-contract/deletecar/{id}','userController@deletecar');

Route::get('/E-contract/waitCars','userController@waitCars');
Route::get('/E-contract/waitUsers','userController@waitUsers');
    Route::get('/E-contract/home','userController@userHome');
    Route::get('/E-contract/addcar','userController@addcarform');
    Route::post('/E-contract/store','userController@store');
    Route::post('/E-contract/storeCar','userController@storeCar');
   Route::post('/E-contract/check','userController@checkuser');
   Route::post('/E-contract/search','userController@search');


Route::get('E-contract/','userController@index');
Route::get('/E-contract/login','userController@login');
Route::get('/E-contract/signup','userController@signup');
Route::get('/E-contract/logout','userController@logout');


/*Route::get('noadmin',function()
{
   return redirect('/E-contract/login');
});*/
Route::get('notuser',function()
{
   return 'login first';
});