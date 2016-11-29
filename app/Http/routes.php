<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$_ROUTE_PATH	= __DIR__ . '/Routes/';

Route::auth();

Route::get('home', 'HomeController@index');
Route::get('', 'HomeController@index');

require_once($_ROUTE_PATH . 'user.php');
require_once($_ROUTE_PATH . 'company.php');
require_once($_ROUTE_PATH . 'client.php');
require_once($_ROUTE_PATH . 'project.php');
require_once($_ROUTE_PATH . 'timesheet.php');
