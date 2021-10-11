<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("nm_company");
            $table->string("posisi");
            $table->text("jalan_company");
            $table->string("kota_company");
            $table->string("provinsi_company");
            $table->string("email_company");
            $table->unsignedBigInteger('id_mhs')->nullable()->uniqid();
            $table->foreign('id_mhs')->references('id')->on('mahasiswas')->onDelete("cascade");
            $table->timestamps();
        });
        if (Schema::hasTable("t_kuisoners")) {
            Schema::table('t_kuisoners', function (Blueprint $table) {
                $table->unsignedBigInteger('id_company')->nullable();
                $table->foreign('id_company')->references('id')->on('companies')->onDelete("cascade");
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_kuisoners', function (Blueprint $table) {
            $table->dropForeign(['id_company']);
        });
        Schema::dropIfExists('companies');
    }
}
