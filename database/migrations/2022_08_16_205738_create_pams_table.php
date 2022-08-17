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
        Schema::create('pams', function (Blueprint $table) {
            $table->id('idDataPam');
            $table->string('nomor_pegawai');
            $table->string('nama');
            $table->string('alamat');
            $table->string('nomor_rekening');
            $table->string('pemakaian');
            $table->string('plafon');
            $table->string('beban_perusahaan');
            $table->string('keterangan');
            $table->string('tanggal');
            $table->string('is_verified')->default(false);
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
        Schema::dropIfExists('pams');
    }
};
