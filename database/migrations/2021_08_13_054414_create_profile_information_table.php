<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_information', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('rec_id')->nullable();
            $table->string('email')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('reports_to')->nullable();
            
            $table->string('personal_email')->nullable();
            $table->string('fbname')->nullable();
            $table->string('tel')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('bankaccnum')->nullable();
            $table->string('tinnum')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('pagibigmidnum')->nullable();
            $table->string('quote')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_information');
    }
}
