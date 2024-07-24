<?php

// database/migrations/xxxx_xx_xx_create_daily_sales_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailySalesTable extends Migration
{
    public function up()
    {
        Schema::create('daily_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('day');
            $table->integer('number')->default(0);  
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daily_sales');
    }
}

