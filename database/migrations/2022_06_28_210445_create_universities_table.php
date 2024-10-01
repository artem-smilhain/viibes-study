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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_sk');
            $table->string('abbreviation')->nullable();
            $table->string('abbreviation_sk')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('founding_year');
            $table->string('address');
            $table->string('address_sk');
            $table->string('site_url');
            $table->unsignedInteger('number_of_students');
            $table->string('logo_src');
            $table->string('thumbnail_src');
            $table->text('google_map_src');
            $table->string('education_cost_en');
            $table->string('scholarships');
            $table->integer('row_weight');
            $table->string('slug');
            $table->foreignId('city_id')
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
        Schema::dropIfExists('universities');
    }
};
