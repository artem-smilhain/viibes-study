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
        Schema::create('relatives', function (Blueprint $table) {
            $table->id();
            $table->string('last_name_ru');
            $table->string('last_name')->nullable();
            $table->string('birth_name')->nullable();
            $table->string('name_ru');
            $table->string('name');
            $table->string('father_name');
            $table->unsignedTinyInteger('gender_id');
            $table->unsignedTinyInteger('martial_status_id')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('birth_city')->nullable();
            $table->unsignedBigInteger('birth_country_id')->nullable();
            $table->string('street');
            $table->string('house');
            $table->string('apartment')->nullable();
            $table->string('city');
            $table->unsignedBigInteger('country_id');
            $table->string('ps');
            $table->string('actual_street')->nullable();
            $table->string('actual_house')->nullable();
            $table->string('actual_apartment')->nullable();
            $table->string('actual_city')->nullable();
            $table->unsignedBigInteger('actual_country_id')->nullable();
            $table->string('actual_ps')->nullable();
            $table->string('citizenship');
            $table->string('nationality')->nullable();
            $table->string('passport');
            $table->string('passport_issue_place')->nullable();
            $table->date('passport_expiration_date')->nullable();
            $table->string('school_name')->nullable();
            $table->unsignedInteger('school_start_year')->nullable();
            $table->unsignedInteger('school_finish_year')->nullable();
            $table->timestamps();
            $table->foreign('birth_country_id')->references('id')->on('countries')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('actual_country_id')->references('id')->on('countries')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatives');
    }
};
