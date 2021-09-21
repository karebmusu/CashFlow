<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datauang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datauang', function (Blueprint $table) {
            $table->string('nama_transaksi')->index();
            $table->integer('nominal');
            $table->string('status');
            $table->string('kategori');
            $table->timestamp('tanggalinput');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datauang');
    }
}
