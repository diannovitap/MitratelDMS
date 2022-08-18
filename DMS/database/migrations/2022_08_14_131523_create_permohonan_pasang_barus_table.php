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
        Schema::create('permohonan_pasang_barus', function (Blueprint $table) {
            $table->id();
            $table->string('nomorSurat');
            $table->string('tujuan');
            $table->string('pst');
            $table->string('namaPelanggan');
            $table->string('IDpelanggan');
            $table->string('idSite');
            $table->string('namaSite');
            $table->string('alamat');
            $table->string('keterangan');
            $table->string('tagihanlistrik');
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
        Schema::dropIfExists('permohonan_pasang_barus');
    }
};
