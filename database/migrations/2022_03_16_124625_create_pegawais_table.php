<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255)->index();
            $table->string('nip', 255)->index();
            $table->string('noHp', 255)->index();
            $table->string('alamat', 255)->index();
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
        Schema::dropIfExists('Pegawais');
    }
}
