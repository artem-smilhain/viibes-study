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
        Schema::create('programs_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //название документа
            $table->string('program_sk')->nullable();; //название на словацком
            $table->string('program')->nullable();; //название на русском
            $table->string('years_of_study')->nullable(); //длительность обучения
            $table->string('university');
            $table->longText('description')->nullable(); //описание
            $table->longText('exams')->nullable(); //экзамены
            $table->string('study_plan_link')->nullable(); //ссылка на план
            $table->string('study_plan_file')->nullable(); //файл на план
            $table->string('slug');
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
        Schema::dropIfExists('programs_info');
    }
};
