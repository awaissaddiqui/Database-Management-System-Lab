<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('departmentID'); // Foreign key column
            $table->string('jobDetail');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('departmentID')->references('departmentID')->on('departments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
