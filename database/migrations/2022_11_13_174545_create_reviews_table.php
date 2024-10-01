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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('avatar_src');
            $table->string('video_src')->nullable();
            $table->string('preview_src')->nullable();
            $table->string('image_src')->nullable();
            $table->string('image_place_name')->nullable();
            $table->string('instagram_url')->nullable();
            $table->unsignedTinyInteger('is_interview');
            $table->integer('row_weight');
            $table->text('content')->nullable();
            $table->foreignId('university_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
    }
};
