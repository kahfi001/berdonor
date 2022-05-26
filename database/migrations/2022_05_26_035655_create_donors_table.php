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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->integer('tlp');
            $table->string('tempat');
            $table->string('tgl_lahir');
            $table->string('jk');
            $table->string('donor_terakhir');
            $table->integer('skrdonor');
            $table->string('lokasi_donor');
            $table->string('tgl_donor');
            $table->string('jam');
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
        Schema::dropIfExists('donors');
    }
};
