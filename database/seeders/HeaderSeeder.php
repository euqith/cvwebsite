<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_m_header')->truncate();
        DB::table('tb_m_header')->insert([
            'firstname' => 'Christian',
            'lastname' =>'Eko Y',
            'jobposition' => 'IT Analyst',
            'picturepath' => 'cvprofile.jpg',
            'createdby' => 'system',
            'updatedby' => 'system',
            'initial' => 'CY',
            'email' => 'admin@kurisu.id',
            'phonenumber' => '082299226696',
            'downloadpath'=>'',
            'address' => 'Surabaya, Indonesia'
        ]); 
}
}