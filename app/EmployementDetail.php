<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployementDetail extends Model
{
    //
	protected $fillable = [
				
			'branch','designation',
			'joining_date','contract_start_date','contract_end_date','retirement_date','bank',
			'bank_acc_no','company_contact_no','company_email','termination_date','termination_details',
			'company_id','dept_id','employee_id','user_id'
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
