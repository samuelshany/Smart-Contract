<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaitUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wait_users', function (Blueprint $table) {
            
            $table->string('name');
            $table->string('email','50');
            $table->string('national_id','14')->primary();
            $table->string('password');
            $table->string('age','3');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('id_image');
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
        //
    }
}
