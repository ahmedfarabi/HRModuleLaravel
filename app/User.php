<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id','username', 'email', 'password','company_id','dept_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function Employee(){
    	return $this->belongsTo('App\Employee','employee_id','employee_id');
    }
    
    public function Company(){
    	return $this->belongsTo('App\Company','company_id','company_id');
    }
    
    public function Department(){
    	return $this->belongsTo('App\Department','dept_id','dept_id');
    }
    
}
