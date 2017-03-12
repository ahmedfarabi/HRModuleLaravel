<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */



	$factory->define(App\Company::class, function (Faker\Generator $faker) {
	
		return [
			'company_name' => $faker->company,
			'subscribed_modules' => $faker->sentence,
			'subscription_start_date' => $faker->dateTime,
			'subscription_end_date' => $faker->dateTime,
			'status' => 'Active',
		];
	});
	
	$factory->define(App\Department::class, function (Faker\Generator $faker) {
	
		return [
			'dept_name' => $faker->name,
				'company_id' => random_int(2, 11),
		];
	});
	
	$factory->define(App\Employee::class, function (Faker\Generator $faker) {
	
		return [
			'full_name' => $faker->name,
			'accessibility' => $faker->name,
			'active' =>'Active',
				'company_id' => random_int(2, 11),
				'dept_id' => random_int(2, 26),
		];
	});
	
		$factory->define(App\User::class, function (Faker\Generator $faker) {
			static $password;
		
			return [
					'username' => $faker->unique()->name,
					'email' => $faker->unique()->safeEmail,
					'password' => $password ?: $password = bcrypt('secret'),
					'remember_token' => str_random(10),
					'employee_id' => random_int(2, 101),
					'company_id' => random_int(2, 11),
					'dept_id' => random_int(2, 26),
			];
		});
		
		
		$factory->define(App\EmployeeDetail::class, function (Faker\Generator $faker) {

		
			return [				
					'date_of_birth' => $faker->dateTime,
					'age' => random_int(20, 80),
					'gender' => 'Male',
					'marital_status' => $faker->name,
					'religion' => 'Islam',
					'nationality' => 'Bengali',
					'nid_no' => $faker->bankAccountNumber,
					'employee_id' => random_int(2, 101),
					'company_id' => random_int(2, 11),
					'dept_id' => random_int(2, 26),
					'user_id' => random_int(2, 101),
			];
		});
		
		$factory->define(App\ContactDetail::class, function (Faker\Generator $faker) {
			
		
			return [
					'parmanent_addr' => $faker->address,
					'current_addr' => $faker->address,
					'contact_no' => $faker->phoneNumber,
					'emergency_no' => $faker->phoneNumber,
					'emergency_contact_name' => $faker->name,
					'emergency_contact_relation' => 'Relative',
					'employee_id' => random_int(2, 101),
					'company_id' => random_int(2, 11),
					'dept_id' => random_int(2, 26),
					'user_id' => random_int(2, 101),
			];
		});
		

		$factory->define(App\EmployementDetail::class, function (Faker\Generator $faker) {

		
			return [
					'branch' => $faker->address,
					'designation' => $faker->name,
					'joining_date' => $faker->dateTime,
					'contract_start_date' => $faker->dateTime,
					'contract_end_date' => $faker->dateTime,
					'retirement_date' => $faker->dateTime,
					'bank' => $faker->name,
					'bank_acc_no' => $faker->bankAccountNumber,
					'company_contact_no' => $faker->phoneNumber,
					'company_email' => $faker->email,
					'termination_date' => $faker->dateTime,
					'termination_details' => $faker->sentence,
					'employee_id' => random_int(2, 101),
					'company_id' => random_int(2, 11),
					'dept_id' => random_int(2, 26),
					'user_id' => random_int(2, 101),
			];
		});
	
			

	