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

// Route::get('/', function () {

// });

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expenseReport', 'ExpenseReportController');
Route::get('expenseReport/{id}/delete', ['as' => 'expenseReport.delete', 'uses' => 'ExpenseReportController@destroy']);
Route::get('expenseReport/{id}/sendEmail', 'ExpenseReportController@sendEmail');
Route::get('expenseReport/{id}/expense/create', 'ExpenseController@create');
Route::post('expenseReport/{id}/expense', 'ExpenseController@store');
Route::get('expenseReport/{report}/expense/{id}/delete', ['as' => 'expense.delete', 'uses' => 'ExpenseController@destroy']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
