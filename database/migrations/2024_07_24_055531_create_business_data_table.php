<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key for the user
            $table->string('business_name');
            $table->string('email');
            $table->string('phone');
            $table->string('name');
            $table->string('country_code');
            $table->string('call_id');
            $table->enum('status', [
                'call_not_done',
                'call_not_connected',
                'call_connected_user_not_interested',
                'call_connected_follow_up',
                'call_connected_user_interested'
            ])->default('call_not_done');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_data');
    }
}
