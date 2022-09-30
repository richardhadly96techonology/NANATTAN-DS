<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('empno');
            $table->string('nicno');
            $table->string('fname');
            $table->string('lname');
            $table->text('address');
            $table->string('email');
            $table->text('designation');
            $table->string('branch');
            $table->string('department');
            $table->string('ministry');
            $table->string('apdate');
            $table->string('dob'); 
            $table->string('phno'); 
            $table->string('image');
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
        Schema::dropIfExists('persons');
    }
}
