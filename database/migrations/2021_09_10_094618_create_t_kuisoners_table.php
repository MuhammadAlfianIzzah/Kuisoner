<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKuisonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kuisoners', function (Blueprint $table) {
            $table->id();


            $table->integer("f5_01")->nullable();
            $table->integer("f5_02")->nullable();
            $table->integer("f5_03")->nullable();

            $table->string("f5_04")->nullable();
            $table->integer("f504_02")->nullable();
            $table->integer("f5_05")->nullable();
            $table->integer("f5_06")->nullable();

            $table->integer("f12_01")->nullable();
            $table->string("f12_02")->nullable();

            $table->integer("f8")->nullable();
            $table->integer("f14")->nullable();

            $table->integer("f14a")->nullable();
            $table->integer("f15")->nullable();

            $table->integer("f13_01")->nullable();
            $table->integer("f13_02")->nullable();
            $table->integer("f13_03")->nullable();

            $table->integer("f21")->nullable();
            $table->integer("f22")->nullable();
            $table->integer("f23")->nullable();
            $table->integer("f24")->nullable();
            $table->integer("f25")->nullable();
            $table->integer("f26")->nullable();
            $table->integer("f27")->nullable();

            $table->integer("f3_01")->nullable();
            $table->integer("f3_02")->nullable();
            $table->integer("f3_03")->nullable();


            $table->integer("f4_01")->nullable();
            $table->integer("f4_02")->nullable();
            $table->integer("f4_03")->nullable();
            $table->integer("f4_04")->nullable();
            $table->integer("f4_05")->nullable();
            $table->integer("f4_06")->nullable();
            $table->integer("f4_07")->nullable();
            $table->integer("f4_08")->nullable();
            $table->integer("f4_09")->nullable();
            $table->integer("f4_10")->nullable();
            $table->integer("f4_11")->nullable();
            $table->integer("f4_12")->nullable();
            $table->integer("f4_13")->nullable();
            $table->integer("f4_14")->nullable();
            $table->integer("f4_15")->nullable();
            $table->string("f4_16")->nullable();


            $table->integer("f6")->nullable();
            $table->integer("f7")->nullable();
            $table->integer("f7a")->nullable();

            $table->integer("f9_01")->nullable();
            $table->integer("f9_02")->nullable();
            $table->integer("f9_03")->nullable();
            $table->integer("f9_04")->nullable();
            $table->integer("f9_05")->nullable();
            $table->string("f9_06")->nullable();

            $table->integer("f10_01")->nullable();
            $table->string("f10_02")->nullable();

            $table->integer("f11_01")->nullable();
            $table->string("f11_02")->nullable();

            $table->integer("f11a")->nullable();
            $table->string("f11a_01")->nullable();

            $table->integer("f16_01")->nullable();
            $table->integer("f16_02")->nullable();
            $table->integer("f16_03")->nullable();
            $table->integer("f16_04")->nullable();
            $table->integer("f16_05")->nullable();
            $table->integer("f16_06")->nullable();
            $table->integer("f16_07")->nullable();
            $table->integer("f16_08")->nullable();
            $table->integer("f16_09")->nullable();
            $table->integer("f16_10")->nullable();
            $table->integer("f16_11")->nullable();
            $table->integer("f16_12")->nullable();
            $table->integer("f16_13")->nullable();
            $table->string("f16_14")->nullable();

            $table->integer("f17_1")->nullable();
            $table->integer("f17_3")->nullable();
            $table->integer("f17_5")->nullable();
            $table->integer("f17_5a")->nullable();
            $table->integer("f17_7")->nullable();
            $table->integer("f17_9")->nullable();
            $table->integer("f17_11")->nullable();
            $table->integer("f17_13")->nullable();
            $table->integer("f17_15")->nullable();
            $table->integer("f17_17")->nullable();
            $table->integer("f17_19")->nullable();
            $table->integer("f17_21")->nullable();
            $table->integer("f17_23")->nullable();
            $table->integer("f17_25")->nullable();
            $table->integer("f17_27")->nullable();
            $table->integer("f17_29")->nullable();
            $table->integer("f17_31")->nullable();
            $table->integer("f17_33")->nullable();
            $table->integer("f17_35")->nullable();
            $table->integer("f17_37")->nullable();
            $table->integer("f17_37a")->nullable();
            $table->integer("f17_39")->nullable();
            $table->integer("f17_41")->nullable();
            $table->integer("f17_43")->nullable();
            $table->integer("f17_45")->nullable();
            $table->integer("f17_47")->nullable();
            $table->integer("f17_49")->nullable();
            $table->integer("f17_51")->nullable();
            $table->integer("f17_53")->nullable();



            $table->integer("f17_2b")->nullable();
            $table->integer("f17_4b")->nullable();
            $table->integer("f17_6b")->nullable();
            $table->integer("f17_8b")->nullable();
            $table->integer("f17_6ba")->nullable();
            $table->integer("f17_10b")->nullable();
            $table->integer("f17_12b")->nullable();
            $table->integer("f17_14b")->nullable();
            $table->integer("f17_16b")->nullable();
            $table->integer("f17_18b")->nullable();
            $table->integer("f17_20b")->nullable();
            $table->integer("f17_22b")->nullable();
            $table->integer("f17_24b")->nullable();
            $table->integer("f17_26b")->nullable();
            $table->integer("f17_28b")->nullable();
            $table->integer("f17_30b")->nullable();
            $table->integer("f17_32b")->nullable();
            $table->integer("f17_34b")->nullable();
            $table->integer("f17_36b")->nullable();
            $table->integer("f17_38b")->nullable();
            $table->integer("f17_38ba")->nullable();
            $table->integer("f17_40b")->nullable();
            $table->integer("f17_42b")->nullable();
            $table->integer("f17_44b")->nullable();
            $table->integer("f17_46b")->nullable();
            $table->integer("f17_48b")->nullable();
            $table->integer("f17_50b")->nullable();
            $table->integer("f17_52b")->nullable();
            $table->integer("f17_54b")->nullable();

            $table->integer("f19_a")->nullable();
            $table->string("f19_b")->nullable();
            $table->string("f19_c")->nullable();
            $table->timestamp("f19_d")->nullable();

            $table->unsignedBigInteger('id_mhs')->nullable()->uniqid();
            $table->foreign('id_mhs')->references('id')->on('mahasiswas')->onDelete("cascade");
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
        Schema::dropIfExists('t_kuisoners');
    }
}
