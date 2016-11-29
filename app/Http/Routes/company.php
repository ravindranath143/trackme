<?php

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => '/companies'],function()
{
   Route::get('', 'CompanyController@index');
   Route::get('home', 'CompanyController@index');
 //   Route::get('getdata', [
	// 	'as'			=> 'employees.getdata',
	// 	'uses' => 'EmployeeController@getData',
	// ]);
   
});