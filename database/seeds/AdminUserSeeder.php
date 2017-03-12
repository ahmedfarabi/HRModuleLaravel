<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Department;
use App\Company;
use App\Employee;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$company_id = 1;
    	$dept_id = 1;
    	$employee_id = 1;
    	$user_id = 1;
    	 
    	// company
    	DB::table('companies')->delete();
    	Company::create([
    			'company_id' => $company_id ,
    			'company_name' => 'Administrator',
    			'subscribed_modules' => 'Super',
    			'status' => 'Active',
    	]);
    	 
    	// dept
    	DB::table('departments')->delete();
    	$company= DB::table('companies')->where('company_id',$company_id)->value('company_id');
    	echo $company;
    	Department::create([
    			'company_id' => $company_id,
    			'dept_id' => '1',
    			'dept_name' => 'Administrator',
    	]);
    	 
    	// employees
    	DB::table('employees')->delete();
    	$department= DB::table('departments')->where('dept_id',$dept_id)->value('dept_id');
    	Employee::create([
    			'company_id' => $company,
    			'dept_id' => $department,
    			'employee_id' => '1',
    			'active' => 'Active',
    	]);
    	 
    	// users
    	DB::table('users')->delete();
    	$employee= DB::table('employees')->where('employee_id',$employee_id)->value('employee_id');
    	User::create([
    			'company_id' => $company,
    			'dept_id' => $department,
    			'employee_id' => $employee,
    			'username' => 'Super',
    			'email' => 'super@admin.com',
    			'password' => bcrypt('super456'),
    			'remember_token' => 'null',
    	]);
    }
}
