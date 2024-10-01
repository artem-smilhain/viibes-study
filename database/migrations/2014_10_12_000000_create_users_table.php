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
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('messenger')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedTinyInteger('gender_id');
            $table->date('birth_date');
            $table->string('birth_place')->nullable();
            $table->string('citizenship');
            $table->foreignId('country_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('house')->nullable();
            $table->string('ps')->nullable();
            $table->string('parent')->nullable();
            $table->foreignId('course_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->tinyInteger('status_id')->unsigned()->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
