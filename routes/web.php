<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@dashboard');

Route::get('/dashboard', 'App\Http\Controllers\PagesController@dashboard');

Route::get('/add-department', 'App\Http\Controllers\PagesController@createDepartments');

Route::get('/add-employee', 'App\Http\Controllers\PagesController@createEmployee');

Route::resource('departments', 'App\Http\Controllers\DepartmentsController');
Route::resource('employees', 'App\Http\Controllers\EmployeesController');

Auth::routes();
