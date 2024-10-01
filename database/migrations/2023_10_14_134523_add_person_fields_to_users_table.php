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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name_ru');
            $table->string('birth_name')->nullable();
            $table->string('name_ru');
            $table->string('father_name');
            $table->unsignedTinyInteger('martial_status_id')->nullable();
            $table->string('birth_city')->nullable();
            $table->unsignedBigInteger('birth_country_id')->nullable();
            $table->string('apartment')->nullable();
            $table->string('actual_street')->nullable();
            $table->string('actual_house')->nullable();
            $table->string('actual_apartment')->nullable();
            $table->string('actual_city')->nullable();
            $table->unsignedBigInteger('actual_country_id')->nullable();
            $table->string('actual_ps')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport');
            $table->string('passport_issue_place')->nullable();
            $table->date('passport_expiration_date')->nullable();
            $table->string('school_name')->nullable();
            $table->unsignedInteger('school_start_year')->nullable();
            $table->unsignedInteger('school_finish_year')->nullable();
            $table->renameColumn('mobile', 'phone');
            $table->dropColumn('parent');
            $table->dropColumn('messenger');
            $table->dropColumn('birth_place');
            $table->foreign('birth_country_id')->references('id')->on('countries')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_birth_country_id_foreign');
            $table->dropForeign('users_actual_country_id_foreign');
            $table->dropColumn('last_name_ru');
            $table->dropColumn('birth_name');
            $table->dropColumn('name_ru');
            $table->dropColumn('father_name');
            $table->dropColumn('martial_status_id');
            $table->dropColumn('birth_city');
            $table->dropColumn('birth_country_id');
            $table->dropColumn('apartment');
            $table->dropColumn('actual_street');
            $table->dropColumn('actual_house');
            $table->dropColumn('actual_apartment');
            $table->dropColumn('actual_city');
            $table->dropColumn('actual_country_id');
            $table->dropColumn('actual_ps');
            $table->dropColumn('nationality');
            $table->dropColumn('passport');
            $table->dropColumn('passport_issue_place');
            $table->dropColumn('passport_expiration_date');
            $table->dropColumn('school_name');
            $table->dropColumn('school_start_year');
            $table->dropColumn('school_finish_year');
            $table->string('parent')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('messenger')->nullable();
            $table->renameColumn('phone', 'mobile');

        });
    }
};
