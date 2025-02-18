<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_m_profile')->truncate();
        DB::table('tb_m_profile')->insert([
            'pendidikan1' => 'Bachelor of',
            'description' =>'I am a technology enthusiast with a passion for exploring and staying up-to-date with the latest advancements in the tech world. I graduated with a degree in Computer Engineering in 2021, which has provided me with a solid foundation in IT principles and practices.

Currently, I work as an IT Support Analyst at PT. HM Sampoerna, where I have been employed since 2022. In this role, I am responsible for ensuring the smooth operation of IT systems and providing technical support to the organization.

My career in IT began in 2018, giving me valuable hands-on experience in the field over the years. With a strong background in troubleshooting, system maintenance, and user support, I am always eager to learn and contribute to the success of the team and the company.',
            'jurusan1' => 'Information Technology Engineering',
            'lokasipendidikan1' => 'Institut Teknologi Surabaya',
            'tahunlulus1' => '2021',
            
        ]); 
    }
}