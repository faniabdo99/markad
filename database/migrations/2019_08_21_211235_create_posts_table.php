<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p_title');
            $table->string('p_slug')->uniqe();
            $table->string('p_keywords');
            $table->string('p_image')->default('images/blog/default.png');
            $table->text('p_description');
            $table->integer('p_section');
            $table->text('p_body');
            $table->integer('author_id')->nullable();
            $table->integer('p_views')->default(0);
            $table->integer('is_important')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
