<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Untuk Superuser
        \App\Models\user::create([
        	'nama' => 'Dafid Alfian',
        	'username' => 'masdafid',
        	'email' => 'sdwi02467@gmail.com',
            'id_google' => '116594077536669847695',
            'facebook_id' => '1210401466517141',
        	'password' => bcrypt('12'),
        	'tipe_akun' => 'superuser',
        	'email_verified_at' => Now()
        ]);

        // Untuk Admin
        \App\Models\user::create([
            'nama' => 'Bagas Muzaky',
            'username' => 'masbagas',
            'email' => 'bagas@gmail.com',
            'id_google' => '32433243241',
            'facebook_id' => '3456475476',
            'password' => bcrypt('12'),
            'tipe_akun' => 'admin',
            'email_verified_at' => Now()
        ]);

        // Untuk Karyawan
        \App\Models\user::create([
            'nama' => 'Sinta Novita',
            'username' => 'sintanovita',
            'email' => 'sinta@gmail.com',
            'id_google' => '3214324324',
            'facebook_id' => '2314234',
            'password' => bcrypt('12'),
            'tipe_akun' => 'karyawan',
            'email_verified_at' => Now()
        ]);
    }
}
