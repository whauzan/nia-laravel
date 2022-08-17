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
        Schema::create('tvkabels', function (Blueprint $table) {
            $table->id('idDataTvkabel');
            $table->string('nomor_pegawai');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('jenis_tv');
            $table->string('pemakaian');
            $table->string('plafon');
            $table->string('roaming_ln');
            $table->string('beban_pegawai');
            $table->string('beban_perusahaan');
            $table->string('tagihan');
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
        Schema::dropIfExists('tvkabels');
    }
};
