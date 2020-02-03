<?php


use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;


class CreateArticlesTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('articles', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');

            $table->string('title');

            $table->text('excerpt')->nullable();

            $table->string('featured_image_url')->nullable();

            $table->text('body');

            $table->text('tags')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });

    }


    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::dropIfExists('articles');

    }

}
