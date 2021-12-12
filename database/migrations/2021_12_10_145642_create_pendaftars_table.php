<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('namaLengkap');
            $table->string('kelas');
            $table->string('jenisKelamin');
            $table->string('tempatLahir');
            $table->string('tanggalLahir');
            $table->string('alamatRumah');
            $table->string('hobi');
            $table->string('email');
            $table->string('nomorTelepon');
            $table->text('pengalamanOrganisasi');
            $table->text('alasanMasukOrganisasi');
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
        Schema::dropIfExists('pendaftars');
    }
}
