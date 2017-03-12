<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
	
	protected $fillable = [
				
			'full_name','accessibility','active','company_id','dept_id'
	];
	
	public function Company(){
		return $this->belongsTo('App\Company','company_id','company_id');
	}
	
	public function Department(){
		return $this->belongsTo('App\Department','dept_id','dept_id');
	}
	
	public function User(){
		return $this->hasOne('App\User','id');
	}
}
