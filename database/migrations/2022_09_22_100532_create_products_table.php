<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->date('created_at');
            $table->date('updated_at');
            $table->string('empno');
            $table->string('nicno')->unique();
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
        Schema::dropIfExists('products');
    }
}