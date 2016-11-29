<?php

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => '/timesheet'],function()
{
   Route::get('', 'TimesheetController@index');
   Route::get('home', 'TimesheetController@index');
 //   Route::get('getdata', [
	// 	'as'			=> 'employees.getdata',
	// 	'uses' => 'EmployeeController@getData',
	// ]);
   
});