<?php

// database/migrations/xxxx_xx_xx_create_business_data_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDataTable extends Migration
{
    public function up()
    {
        Schema::create('business_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->string('business_name');
            $table->string('email');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('name')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('business_data');
    }
}

