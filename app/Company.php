<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
	protected $fillable = [
			'company_name','subscribed_modules', 'subscription_start_date','subscription_end_date','status',
				
	];
	
	public function Department(){
		return $this->hasMany('App\Department','dept_id');
	}
	
}
