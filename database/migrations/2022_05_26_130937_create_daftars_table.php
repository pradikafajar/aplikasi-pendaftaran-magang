<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama');
            $table->date('tgl_lhr');
            $table->string('jenis_klmn');
            $table->text('alamat')->nullable();
            $table->string('asl_sklh');
            $table->string('instansi_magang');
            $table->date('tgl_mulai');
            $table->date('tgl_berakhir');
            $table->string('no_hp');
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
        Schema::dropIfExists('daftars');
    }
}
