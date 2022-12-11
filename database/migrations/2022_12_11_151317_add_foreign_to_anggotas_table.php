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
            $table->foreign('kelamin_id')->references('id')->on('kelamins')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('agama_id')->references('id')->on('agamas')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('darah_id')->references('id')->on('darahs')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('perkawinan_id')->references('id')->on('perkawinans')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('hubungan_id')->references('id')->on('hubungans')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('kewarganegaraan_id')->references('id')->on('kewarganegaraans')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('kk_id')->references('id')->on('keluargas')->onUpdate('cascade')
            ->onDelete('cascade');
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
            $table->dropForeign(['kelamin_id']);
            $table->dropForeign(['agama_id']);
            $table->dropForeign(['pendidikan_id']);
            $table->dropForeign(['pekerjaan_id']);
            $table->dropForeign(['darah_id']);
            $table->dropForeign(['kelamin_id']);
            $table->dropForeign(['perkawinan_id']);
            $table->dropForeign(['hubungan_id']);
            $table->dropForeign(['kewarganegaraan_id']);
        });
    }
};
