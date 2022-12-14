<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_name')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->text('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('status')->default('1')->comment('1 => active , 0 => blocked');
            $table->tinyInteger('email_status')->default('0')->comment('1 => confirmed , 0 => not confirmed');
            $table->tinyInteger('phone_status')->default('0')->comment('1 => confirmed , 0 => not confirmed');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
