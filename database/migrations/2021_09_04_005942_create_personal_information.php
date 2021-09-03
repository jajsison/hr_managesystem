<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('rec_id')->nullable();
            $table->string('nickname')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('fbname')->nullable();
            $table->string('tel')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('bankaccnum')->nullable();
            $table->string('sssnum')->nullable();
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
        Schema::dropIfExists('personal_information');
    }
}
