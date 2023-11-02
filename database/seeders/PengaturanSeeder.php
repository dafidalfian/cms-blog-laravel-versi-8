<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pengaturan::create([
        	'judul_situs' => "WebKampung Untuk Indonesia",
        	'deskripsi_situs' => "Ubah Sendiri"
        ]);
    }
}
