<?php

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => '/employees'],function()
{
   Route::get('', 'EmployeesController@index');
 //   Route::get('getdata', [
	// 	'as'			=> 'employees.getdata',
	// 	'uses' => 'EmployeeController@getData',
	// ]);
   
});