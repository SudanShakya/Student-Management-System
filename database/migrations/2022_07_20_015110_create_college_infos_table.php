<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('semester_id');
            $table->unsignedBigInteger('batch_id');
            $table->string('symbol_no')->unique();
            $table->string('TU_registration')->unique();

            //foreign key usage
            $table->foreign('student_id')->references('id')->on('students')->onDelete('CASCADE');
            $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->foreign('batch_id')->references('id')->on('batches');
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
        Schema::dropIfExists('college_infos');
    }
}
