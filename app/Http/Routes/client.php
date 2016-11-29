<?php

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => '/clients'],function()
{
   Route::get('', 'ClientsController@index');
   Route::get('home', 'ClientsController@index');
 //   Route::get('getdata', [
	// 	'as'			=> 'employees.getdata',
	// 	'uses' => 'EmployeeController@getData',
	// ]);
   
});