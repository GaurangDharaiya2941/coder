<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('dob')->nullable();
            $table->string('post')->nullable();
            $table->string('education')->nullable();
            $table->string('greadute')->nullable();
            $table->string('post_greduate')->nullable();
            $table->text('skill')->nullable();
            $table->text('hobby')->nullable();
            $table->string('school')->nullable();
            $table->string('other_school')->nullable();
            $table->string('collage')->nullable();
            $table->string('post_collage')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('other_address')->nullable();
            $table->string('other_city')->nullable();
            $table->string('other_state')->nullable();
            $table->integer('other_pincode')->nullable();
            $table->string('other_country')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('user_details');
    }
}
