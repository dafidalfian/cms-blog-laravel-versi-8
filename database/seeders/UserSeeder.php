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
        	'password' => bcrypt('12'),
        	'tipe_akun' => 1,
        	'email_verified_at' => Now()
        ]);
    }
}
