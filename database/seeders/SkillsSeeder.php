<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk mengisi data ke dalam tabel tb_m_skills.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa data contoh ke dalam tabel tb_m_skills
        DB::table('tb_m_skills')->truncate();
        DB::table('tb_m_skills')->insert([
            [
                'skill' => 'Analytical Knowledge',
                'percentage' => 85.5,
                'description' => '',
                'createdby' => 'admin',
                'updatedby' => 'admin',
                'isactive' => true,
                'isdeleted' => false,
            ],
            [
                'skill' => 'Software Documentation',
                'percentage' => 90,
                'description' => '',
                'createdby' => 'admin',
                'updatedby' => 'admin',
                'isactive' => true,
                'isdeleted' => false,
            ],
            [
                'skill' => 'Laravel',
                'percentage' => 75.0,
                'description' => '',
                'createdby' => 'admin',
                'updatedby' => 'admin',
                'isactive' => true,
                'isdelete' => false,
            ],
            [
                'skill' => 'SQL Server',
                'percentage' => 80.0,
                'description' => '',
                'createdby' => 'admin',
                'updatedby' => 'admin',
                'isactive' => true,
                'isdelete' => false,
            ],
            [
                'skill' => 'MySQL',
                'percentage' => 80.0,
                'description' => '',
                'createdby' => 'admin',
                'updatedby' => 'admin',
                'isactive' => true,
                'isdelete' => false,
            ]
        ]);
    }
}
