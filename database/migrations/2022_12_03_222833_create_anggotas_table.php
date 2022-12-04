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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('nik',100);
            $table->string('jenis_kelamin',100);
            $table->string('tempat_lahir',100);
            $table->string('tanggal_lahir',100,null);
            $table->string('agama',100,null);
            $table->string('pendidikan',100,null);
            $table->string('pekerjaan',100,null);
            $table->string('darah',100,null);
            $table->string('perkawinan',100,null);
            $table->string('hubungan',100,null);
            $table->string('suku',100,null);
            $table->string('kewarganegaraan',100,null);
            $table->string('nama_ayah',100,null);
            $table->string('nama_ibu',100,null);
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
        Schema::dropIfExists('anggotas');
    }
};
