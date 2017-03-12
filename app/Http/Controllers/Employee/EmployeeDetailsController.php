<?php

namespace App\Http\Controllers\Employee;

use Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Employee\EmployeeDetailsController;

use App\EmployeeDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeDetailsController extends Controller
{
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    	return View::make('adminlte::employeeDetail.index')
    				->with('emp_id',[Request::segment(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return View::make('adminlte::employeeDetail.create', [Request::segment(3)])
    										->with('emp_id',[Request::segment(3)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	$rules = array(
    			    	'birth-day'       => 'required',
    	    			'age'       => 'required',
    	    			'nid'      => 'required'
    	);
    	$validator = Validator::make(Input::all(), $rules);
    	 
    	// process the login
    	if ($validator->fails()) {
    		return  redirect()->route('employeeDetail.create', [Request::segment(3)])
    		->withErrors($validator)
    		->withInput(Input::except('password'));
    	} else {
    		// store
    	    	
    		$empDet = new EmployeeDetail;
    		$empDet->employee_id    = Request::segment(3);
    		$empDet->date_of_birth  = Input::get('birth_day');
    		$empDet->age      		= Input::get('age');
    		$empDet->religion 		= Input::get('religion');
    		$empDet->nationality 	= Input::get('nationality');
    		$empDet->marital_status = Input::get('marital_stat');
    		$empDet->nid_no 		= Input::get('nid');
    		$empDet->gender 		= Input::get('gender');

    		$empDet->save();
    		
    		// redirect
    		Session::flash('alert-success', 'Success ! New Employee created successfully !');
    		return  redirect()->route('employeeDetail.create', [Request::segment(3)]);
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
