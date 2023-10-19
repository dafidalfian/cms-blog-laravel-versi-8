<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_situs');
            $table->text('deskripsi_situs')->nullable();
            $table->string('icon_situs')->nullable();
<<<<<<< HEAD
            $table->string('logo_situs')->nullable();
            $table->string('logo_utama_situs')->nullable();
=======
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
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
        Schema::dropIfExists('pengaturan');
    }
}
