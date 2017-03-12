<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    //
	protected $fillable = [
				
			'parmanent_addr','current_addr','contact_no','emergency_no',
			'religion','emergency_contact_name','emergency_contact_relation',
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
