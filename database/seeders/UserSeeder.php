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
        //
        \App\Models\User::create([
        	'nama' => 'Dafid A',
        	'username' => 'masdafid123',
        	'email' => 'sdwi02467@gmail.com',
            'id_google' => '116594077536669847695',
            'facebook_id' => '1210401466517141',
        	'password' => bcrypt('12'),
        	'tipe_akun' => 1,
        	'email_verified_at' => Now()
        ]);
    }
}
