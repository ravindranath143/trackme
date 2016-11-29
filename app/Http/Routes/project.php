<?php

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => '/projects'],function()
{
   Route::get('', 'ProjectsController@index');
   Route::get('home', 'ProjectsController@index');
 //   Route::get('getdata', [
	// 	'as'			=> 'employees.getdata',
	// 	'uses' => 'EmployeeController@getData',
	// ]);
   
});