<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDataPemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemohon', function (Blueprint $table) {
            $table->id();
            $table->string('namaPemohon');
            $table->string('alamat');
            $table->string('desaKelurahan');
            $table->string('kecamatan');
            $table->string('kegiatan');
            $table->string('sertifikatHakAtasTanah');
            $table->string('dokumenPengukuran');
            $table->string('fotoCopyKtpKK');
            $table->string('fotoCopyKtpIdentitasPemilikHak');
            $table->string('suratKuasaPermohonan');
            $table->string('suratPermohonan');
            $table->string('fotoCopyPajakBumiBangunan');
            $table->string('detailPermohonanPengukuran');
            $table->rememberToken();
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
        Schema::dropIfExists('data_pemohons');
    }
}
