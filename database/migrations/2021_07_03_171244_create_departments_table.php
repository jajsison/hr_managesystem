<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department')->nullable();
            $table->timestamps();
        });
        DB::table('departments')->insert([
            ['department' => 'Web Department'],
            ['department' => 'IT Management'],
            ['department' => 'Marketing'],
            ['department' => 'Owner'],
            ['department' => 'Accounts'],
            ['department' => 'Ameriquote'],
            ['department' => 'Admin & HR'],
            ['department' => 'House Experts'],
            ['department' => 'O2O'],
            ['department' => 'Rush Order'],
            

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
