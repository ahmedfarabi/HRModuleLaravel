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

Route::group(['middleware' => 'auth'], function () {
//    Route::get('/employee', function ()    {
//        // Uses Auth Middleware
//        	return view('adminlte::employee.index');
//    });
   
   	Route::resource('employee', 'Employee\EmployeeController');
   	
   	Route::post('employee' , 					array( 'as' => 'employee.index', 	'uses' => 'Employee\EmployeeController@index' ) );
   	Route::post('employee/create' , 			array( 'as' => 'employee.create', 	'uses' => 'Employee\EmployeeController@create' ) );
   	Route::put('employee/{emp_id}' , 			array( 'as' => 'employee.update', 	'uses' => 'Employee\EmployeeController@update' ) );
   	Route::post('employee/{emp_id}/edit' , 	array( 'as' => 'employee.edit', 	'uses' => 'Employee\EmployeeController@edit' ) );
   	Route::post('employee/{emp_id}/destroy' ,array( 'as' => 'employee.destroy', 'uses' => 'Employee\EmployeeController@destroy' ) );
   	
   	
   	Route::resource('employeeDetail', 'Employee\EmployeeDetailsController');
   	Route::get('employeeDetail/{emp_id}', function ($id) { return $id; });
   	
   	Route::get('employeeDetail/{emp_id}' , 					array( 'as' => 'employeeDetail.index', 	'uses' => 'Employee\EmployeeDetailsController@index' ) );
   	Route::get('employeeDetail/create/{emp_id}' , 			array( 'as' => 'employeeDetail.create', 	'uses' => 'Employee\EmployeeDetailsController@create' ) );
   	//Route::get('employeeDetail' , 			array( 'as' => 'employeeDetail.store', 	'uses' => 'Employee\EmployeeDetailsController@store' ) );
//    	Route::put('employee/{id}/employeeDetail/update' , 			array( 'as' => 'employeeDetail.update', 	'uses' => 'Employee\EmployeeDetailsController@update' ) );
//    	Route::get('employee/{id}/employeeDetail/edit' , 	array( 'as' => 'employeeDetail.edit', 	'uses' => 'Employee\EmployeeDetailsController@edit' ) );
//    	Route::get('employee/{id}/employeeDetail/destroy' ,array( 'as' => 'employeeDetail.destroy', 'uses' => 'Employee\EmployeeDetailsController@destroy' ) );


   	

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
