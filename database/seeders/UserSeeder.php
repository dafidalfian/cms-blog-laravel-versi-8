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
<<<<<<< HEAD
        \App\Models\user::create([
=======
        \App\Models\User::create([
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
        	'nama' => 'Dafid Alfian',
        	'username' => 'masdafid',
        	'email' => 'sdwi02467@gmail.com',
            'id_google' => '116594077536669847695',
            'facebook_id' => '1210401466517141',
<<<<<<< HEAD
        	'password' => bcrypt('12'),
=======
        	'password' => bcrypt('12345678'),
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
        	'tipe_akun' => 'superuser',
        	'email_verified_at' => Now()
        ]);

        // Untuk Admin
<<<<<<< HEAD
        \App\Models\user::create([
=======
        \App\Models\User::create([
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
            'nama' => 'Bagas Muzaky',
            'username' => 'masbagas',
            'email' => 'bagas@gmail.com',
            'id_google' => '32433243241',
            'facebook_id' => '3456475476',
<<<<<<< HEAD
            'password' => bcrypt('12'),
=======
            'password' => bcrypt('12345678'),
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
            'tipe_akun' => 'admin',
            'email_verified_at' => Now()
        ]);

        // Untuk Karyawan
<<<<<<< HEAD
        \App\Models\user::create([
=======
        \App\Models\User::create([
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
            'nama' => 'Sinta Novita',
            'username' => 'sintanovita',
            'email' => 'sinta@gmail.com',
            'id_google' => '3214324324',
            'facebook_id' => '2314234',
<<<<<<< HEAD
            'password' => bcrypt('12'),
=======
            'password' => bcrypt('12345678'),
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
            'tipe_akun' => 'karyawan',
            'email_verified_at' => Now()
        ]);
    }
}
