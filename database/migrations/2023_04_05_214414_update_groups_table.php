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
        Schema::table('groups', function (Blueprint $table) {
            $table->string('content_heading')->nullable();
            $table->string('content_img_src')->nullable();
            $table->longText('content_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropColumn('content_heading')->nullable();
            $table->dropColumn('content_img_src')->nullable();
            $table->dropColumn('content_text')->nullable();
        });
    }
};
