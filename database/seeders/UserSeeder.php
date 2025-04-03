<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example seed data
       // Menambahkan beberapa data contoh ke dalam tabel tb_m_skills
       DB::table('tb_m_user')->truncate();
       DB::table('tb_m_user')->insert([
           [
              'username' => 'kurisu',
            'password' => Hash::make('password123'), // Ensure password is hashed
            'firstname' => 'Chris',
            'lastname' => 'E',
            'createdby' => 'admin', // Optional
            'createddate' => Carbon::now(), // Current timestamp
            'updatedby' => null, // Optional
            'updateddate' => null, // Optional
            'isactive' => true,
            'isdeleted' => false,
           ]
        ]);

    }
}
