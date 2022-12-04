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
        Schema::table('anggotas', function (Blueprint $table) {
            $table->unsignedBigInteger('kk_id')->after('nama_ibu')->nullable();
            $table->foreign('kk_id')->references('id')->on('keluargas')->Delete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anggotas', function (Blueprint $table) {
            $table->dropForeign(['kk_id']);
            $table->dropColumn(['kk_id']);
        });
    }
};
