<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            [
                'name' => 'Rahmat Hidayatullah',
                'email' => 'rahmat@example.com',
                'role' =>'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Sakuranomiya',
                'email' => 'sakuranomiya@example.com',
                'role' =>'siswa',
                'password' => bcrypt('password'),

            ],
        ]);

        DB::table('transaksis')->insert([
            [
                'name' => 'Rahmat Hidayatullah',
                'email' => 'rahmat@example.com',
                'paket' =>'paket pemula',
                'harga' =>'20000',
                'notlp' => '081939325350',
                'metode' => 'dana',
            ],
            ]);
    }
}

