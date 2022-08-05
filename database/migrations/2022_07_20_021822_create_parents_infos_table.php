<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->string('father_name',50);
            $table->string('mother_name',50);
            $table->string('father_number', 10);
            $table->string('mother_number',10) -> nullable();
            $table->string('guardian_name',50);
            $table->string('guardian_number',10);
            $table->string('guardian_email',30);
            $table->foreign('student_id')->references('id')->on('students')->onDelete('CASCADE');
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
        Schema::dropIfExists('parents_infos');
    }
}
