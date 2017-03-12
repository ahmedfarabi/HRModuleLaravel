<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use database\migrations;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Companies', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name',255);
            $table->string('subscribed_modules',255)->nullable();
            $table->dateTime('subscription_start_date')->nullable();
            $table->dateTime('subscription_end_date')->nullable();
            $table->string('status',50)->default('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
