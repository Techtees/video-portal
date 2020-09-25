<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source'); #Youtube or file
            $table->unsignedBigInteger('user_id');
            $table->text('video');
            $table->string('title')->nullable(); 
            $table->text('description')->nullable(); 
            $table->string('reference')->nullable(); 
            $table->string('views'); 
            $table->string('thumbnail')->nullable(); 
            $table->string('youtube')->nullable(); 
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('videos');
    }
}
