<?php

namespace App\Http\Controllers\Employee\EmployeeController;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    //
    protected $fillable = [
			
			'date_of_birth','age','gender','marital_status',
			'religion','nationality','nid_no','company_id','dept_id','employee_id','user_id'
	];
    
    
    public function Company(){
    	return $this->belongsTo('App\Company','company_id','company_id');
    }
    
    public function Department(){
    	return $this->belongsTo('App\Department','dept_id','dept_id');
    }
    
    public function Employee(){
    	return $this->belongsTo('App\Employee','employee_id','employee_id');
    }
    
    public function User(){
    	return $this->belongsTo('App\User','id','user_id');
    }
}
