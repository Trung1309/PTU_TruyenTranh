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
        Schema::create('story_models', function (Blueprint $table) {
            $table->increments('storyID');
            $table->string('storyName');
            $table->string('storyAuthor');
            $table->string('storyDesc');
            $table->text('storyContent');
            $table->string('storyImage');
            $table->string('categoryID');
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('story_models');
    }
};
