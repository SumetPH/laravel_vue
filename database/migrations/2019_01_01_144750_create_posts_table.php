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
            $table->increments('id');
            $table->integer('user_id');
            $table->text('academic');
            $table->text('title');
            $table->text('description')->nullable();
            $table->text('file_path');
            $table->text('file_name');
            $table->integer('step1')->default(0);
            $table->integer('step2')->default(0);
            $table->integer('step3')->default(0);
            $table->integer('step3check')->default(0);
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
