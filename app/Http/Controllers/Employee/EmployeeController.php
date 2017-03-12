<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
// use App\EmployeeDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    //
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Show the application dashboard.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('adminlte::employee.index');
	}
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return View::make('adminlte::employee.create');

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
    			'company'       => 'required',
    			'dept'       => 'required',
    			'full_name'      => 'required',
    			'active' => 'required',
    			'accessibility' => 'required',
//     			'birth-day'       => 'required',
//     			'age'       => 'required',
//     			'nid'      => 'required'
    	);
    	$validator = Validator::make(Input::all(), $rules);
    	
    	// process the login
    	if ($validator->fails()) {
    		return Redirect::to('employee/create')
    		->withErrors($validator)
    		->withInput(Input::except('password'));
    	} else {
    		// store
    		$emp = new Employee;
    		$emp->company_id    = Input::get('company');
    		$emp->dept_id      	= Input::get('dept');
    		$emp->full_name 	= Input::get('full_name');
    		$emp->accessibility = Input::get('accessibility');
    		$emp->active 		= Input::get('active');		
    		
//     		$empDet = new EmployeeDetail;
//     		$empDet->date_of_birth  = Input::get('birth_day');
//     		$empDet->age      		= Input::get('age');
//     		$empDet->religion 		= Input::get('religion');
//     		$empDet->nationality 	= Input::get('nationality');
//     		$empDet->marital_status = Input::get('marital_stat');
//     		$empDet->nid_no 		= Input::get('nid');
//     		$empDet->gender 		= Input::get('gender');
    		
//     		$emp->company = $request->company;
//     		echo $emp->company;
//     		$emp->dept = $request->dept;
//     		$emp->full_name = $request->full_name;
//     		$emp->accessibility = $request->accessibility;
//     		$emp->active = $request->active;
    		
    		$emp->save();
//     		$empDet->save();
    		// redirect
    		Session::flash('alert-success', 'Success ! New Employee created successfully !');
    		return Redirect::to('employee/create');
    	}
    	//return redirect('adminlte::employee.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//     	$emp = Employee::find($id);
    	
//     	// show the view and pass the nerd to it
//     	return View::make('adminlte::employee.show')
//     	->with('employee', $emp);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$emp = Employee::find($id);
    	 
    	// show the view and pass the nerd to it
    	return View::make('adminlte::employee.edit')
    	->with('employee', $emp);
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
    	$rules = array(
    			'company'       => 'required',
    			'dept'       => 'required',
    			'full_name'      => 'required',
    			'active' => 'required',
    			'accessibility' => 'required'
    	);
    	$validator = Validator::make(Input::all(), $rules);
    	 
    	// process the login
    	if ($validator->fails()) {
    		return Redirect::to('adminlte::employee/' . $id . '/edit')
    		->withErrors($validator)
    		->withInput(Input::except('password'));
    	} else {
    		// store
    		$emp = new Employee;
    		$emp->company_id    = Input::get('company');
    		$emp->dept_id      = Input::get('dept');
    		$emp->full_name = Input::get('full_name');
    		$emp->accessibility = Input::get('accessibility');
    		$emp->active = Input::get('active');
    		$emp->save();
    		 
    		// redirect
    		Session::flash('message', 'Successfully updated Employee!');
    		return Redirect::to('adminlte::employee.index');
    	}
    	return redirect('employee');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$emp = Employee::find($id);
    	$emp->delete();
    	
    	// redirect
    	Session::flash('message', 'Successfully deleted the employee!');
    	return Redirect::to('adminlte::employee.index');
    }
}
