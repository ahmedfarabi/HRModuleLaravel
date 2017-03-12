<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
	protected $fillable = [
				
			'dept_name',
	];
	
	public function Company(){
		return $this->belongsTo('App\Company','company_id','company_id');
	}
	
	public function Employee(){
		return $this->hasMany('App\Employee','employee_id');
	}
}
