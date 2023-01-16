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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id('id_mhs');
            $table->foreignId('kode_jur')->constrained('jurusan', 'kode_jur');//fk
            $table->foreignId('kode_fak')->constrained('fakultas', 'kode_fak');//fk
            $table->string('nim', 20);
            $table->string('nama_mahasiswa', 200);
            $table->string('jenis_kelamin', 20);
            $table->string('alamat', 255);
            $table->string('email', 250);
            $table->string('status_mhs', 50);
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

        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['kode_jur']);
            $table->dropForeign(['kode_fak']);
        });

        Schema::dropIfExists('mahasiswa');
    }
};
