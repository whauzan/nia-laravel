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
        Schema::create('listriks', function (Blueprint $table) {
            $table->id('idDataListrik');
            $table->string('nomor_pegawai');
            $table->string('nama');
            $table->string('alamat');
            $table->string('nomor_kontrol');
            $table->string('pemakaian');
            $table->string('biaya_admin');
            $table->string('pemakaian_FG');
            $table->string('plafon');
            $table->string('beban_pegawai');
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
        Schema::dropIfExists('listriks');
    }
};
