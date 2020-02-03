<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('image_url')->nullable();
            $table->string('name');
            $table->string('username');

             $table->unsignedBigInteger('user_id')->unique()->nullable();
             

            $table->string('email')->unique();
            $table->text('about_me')->nullable();
            $table->text('likes')->nullable();
            $table->text('dislikes')->nullable();
            $table->string('url')->nullable();
            $table->string('l_url');
            $table->string('g_url');
            $table->timestamps();

            $table -> foreign('user_id') -> references('id') -> on('users')->onDelete('cascade');

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
