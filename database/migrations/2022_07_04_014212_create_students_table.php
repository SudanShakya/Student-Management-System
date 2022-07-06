<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name', 150);
            $table->string('mobile', 10) -> unique();
            $table->string('email') -> unique();
            $table->string('citizenship', 20) -> unique();
            $table->string('gender', 1);
            $table->string('blood_group', 3);
            $table->string('perm_address');
            $table->string('temp_address') -> nullable();
            $table->date('dob');
            $table->boolean('is_active') -> default(true);
            $table->boolean('is_almuni');
            $table->string('picture') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
