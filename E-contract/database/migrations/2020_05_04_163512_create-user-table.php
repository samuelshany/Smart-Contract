<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->string('name');
            $table->string('email','50');
            $table->string('national_id','14')->primary();
            $table->string('password');
            $table->string('age','3');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('id_image');
            $table->boolean('is_admin')->default(0);
            $table->timestamps();
        });
    }

  
}
