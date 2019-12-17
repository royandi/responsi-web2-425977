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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return view('info');
});

// Route::('/jobs', 'JobsController');
// Route::('/employees', 'EmployeesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    //



Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::post('/jobs/add', 'JobsController@add')->name('jobsAdd');
Route::post('/jobs/update', 'JobsController@update')->name('jobsUpdate');
Route::get('/jobs/edit/{id}', 'JobsController@edit')->name('jobsEdit');
Route::get('/jobs/delete/{id}', 'JobsController@destroy')->name('jobsDelete');
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/employees', 'EmployeesController@index')->name('employees');
Route::post('/employees/add', 'EmployeesController@add')->name('employeesAdd');
Route::post('/employees/update', 'EmployeesController@update')->name('employeesUpdate');
Route::get('/employees/edit/{id}', 'EmployeesController@edit')->name('employeesEdit');
Route::get('/employees/delete/{id}', 'EmployeesController@destroy')->name('employeesDelete');
Route::get('/employees/create', function () {
    return view('employees.create');
});
});
