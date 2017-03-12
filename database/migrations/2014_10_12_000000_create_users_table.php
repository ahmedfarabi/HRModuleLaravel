<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('Departments', function (Blueprint $table) {
			$table->increments('dept_id');
			$table->string('dept_name')->default('');
			$table->timestamps();
			$table->softDeletes();
	
			$table->unsignedInteger('company_id');
	
			$table->foreign('company_id')->references('company_id')->on('Companies');
		});
			 
			Schema::create('Employees', function (Blueprint $table) {
				$table->increments('employee_id');
				$table->string('full_name')->default('');
				$table->string('accessibility')->nullable();
				$table->string('active')->default('Active');
				$table->timestamps();
				$table->softDeletes();
	
				$table->unsignedInteger('company_id');
				$table->unsignedInteger('dept_id');
	
				$table->foreign('company_id')->references('company_id')->on('Companies');
				$table->foreign('dept_id')->references('dept_id')->on('Departments');
			});
				 
				Schema::create('Users', function (Blueprint $table) {
					$table->increments('id');
					$table->string('username',180)->unique();
					$table->string('email',180)->unique();
					$table->string('password');
					$table->string('remember_token');
					$table->timestamps();
					$table->softDeletes();
	
					$table->unsignedInteger('company_id');
					$table->unsignedInteger('dept_id');
					$table->unsignedInteger('employee_id');
					 
					$table->foreign('company_id')->references('company_id')->on('Companies');
					$table->foreign('dept_id')->references('dept_id')->on('Departments');
					$table->foreign('employee_id')->references('employee_id')->on('Employees');
				});
	
					Schema::create('Employee_details', function (Blueprint $table) {
						$table->increments('details_id');
						$table->dateTime('date_of_birth')->nullable();
						$table->string('age')->nullable();
						$table->string('gender')->nullable();
						$table->string('marital_status')->nullable();
						$table->string('religion')->nullable();
						$table->string('nationality')->nullable();
						$table->string('nid_no')->nullable();
						
						$table->timestamps();
						$table->softDeletes();
							
						$table->unsignedInteger('company_id');
						$table->unsignedInteger('dept_id');
						$table->unsignedInteger('employee_id');
						$table->unsignedInteger('user_id');
						 
						$table->foreign('company_id')->references('company_id')->on('Companies');
						$table->foreign('dept_id')->references('dept_id')->on('Departments');
						$table->foreign('employee_id')->references('employee_id')->on('Employees');
						$table->foreign('user_id')->references('id')->on('Users');
					});
						Schema::create('Contact_details', function (Blueprint $table) {
							$table->increments('details_id');
							$table->string('parmanent_addr')->nullable();
							$table->string('current_addr')->nullable();
							$table->string('contact_no')->nullable();
							$table->string('emergency_no')->nullable();
							$table->string('religion')->nullable();
							$table->string('emergency_contact_name')->nullable();
							$table->string('emergency_contact_relation')->nullable();
							
							$table->timestamps();
							$table->softDeletes();
	
							$table->unsignedInteger('company_id');
							$table->unsignedInteger('dept_id');
							$table->unsignedInteger('employee_id');
							$table->unsignedInteger('user_id');
	
							$table->foreign('company_id')->references('company_id')->on('Companies');
							$table->foreign('dept_id')->references('dept_id')->on('Departments');
							$table->foreign('employee_id')->references('employee_id')->on('Employees');
							$table->foreign('user_id')->references('id')->on('Users');
						});
							Schema::create('Employement_details', function (Blueprint $table) {
								$table->increments('details_id');
								$table->string('branch')->nullable();
								$table->string('designation')->nullable();
								$table->dateTime('joining_date')->nullable();
								$table->dateTime('contract_start_date')->nullable();
								$table->dateTime('contract_end_date')->nullable();
								$table->dateTime('retirement_date')->nullable();
								$table->string('bank')->nullable();
								$table->string('bank_acc_no')->nullable();
								$table->string('company_contact_no')->nullable();
								$table->string('company_email')->nullable();
								$table->dateTime('termination_date')->nullable();
								$table->string('termination_details')->nullable();
								
								$table->timestamps();
								$table->softDeletes();
	
								$table->unsignedInteger('company_id');
								$table->unsignedInteger('dept_id');
								$table->unsignedInteger('employee_id');
								$table->unsignedInteger('user_id');
	
								$table->foreign('company_id')->references('company_id')->on('Companies');
								$table->foreign('dept_id')->references('dept_id')->on('Departments');
								$table->foreign('employee_id')->references('employee_id')->on('Employees');
								$table->foreign('user_id')->references('id')->on('Users');
							});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
