<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('applicant_id')->nullable();
            $table->integer('phone');
            $table->unsignedInteger('student_id')->nullable();
            $table->unsignedInteger('oldstudent_id')->nullable();
            $table->unsignedInteger('committeemember_id')->nullable();
            $table->unsignedInteger('moestaff_id')->nullable();
            $table->unsignedInteger('school_id')->nullable();
            //$table->foreign('applicant_id')->references('id')->on('applicants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
}
