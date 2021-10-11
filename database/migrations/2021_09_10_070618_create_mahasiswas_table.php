<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string("nim")->unique();
            $table->year("thn_lulus");
            $table->string("kd_ptn");
            $table->string("kd_prodi");
            $table->string("nm_mhs");
            $table->string("no_hp");
            $table->string("email");
            $table->string("nik");
            $table->string("npwp");
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
        Schema::dropIfExists('mahasiswas');
    }
}
