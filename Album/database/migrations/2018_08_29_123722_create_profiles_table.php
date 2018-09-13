<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('nickname')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('status');
            $table->string('gender');
            $table->string('biography')->nullable();
            $table->string('country')->default('Nigeria');
            $table->timestamp('DOB')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('address')->nullable();
            $table->string('quote')->nullable();
            $table->string('password')->default('password');
            $table->softDeletes();
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
        Schema::dropIfExists('profiles');
    }
}
