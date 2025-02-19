<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_m_experiences')->truncate();
        DB::table('tb_m_experiences')->insert([
            [
                'experience' => 'QC Inspector',
                'description' => 'As a QC Speaker Specialist, my primary responsibility is to ensure that each speaker produced meets the required quality standards across multiple aspects, including frequency response, sound quality, and physical appearance. I utilize advanced frequency detection software to perform rigorous testing on each unit, identifying any discrepancies in sound performance.',
                'company' => 'Sinar Baja Electric',
                'startyear' => 2013,
                'endyear' => 2017,
                'createdby' => 'admin',
                'createddate' => Carbon::now(),
                'updatedby' => 'admin',
                'updateddate' => Carbon::now(),
                'isactive' => true,
                'isdeleted' => false,
            ],
            [
                'experience' => 'Managed Service Specialist',
                'description' => 'As a Managed Service Specialist at PT. HM Sampoerna, my primary role involves overseeing and managing all software solutions and systems within the organization to ensure seamless operations and support. I am responsible for the implementation, maintenance, troubleshooting, and optimization of the company software infrastructure, playing a critical role in keeping operations running smoothly and efficiently.',
                'company' => 'Vox Teneo Indonesia',
                'startyear' => 2018,
                'endyear' => 2019,
                'createdby' => 'admin',
                'createddate' => Carbon::now(),
                'updatedby' => 'admin',
                'updateddate' => Carbon::now(),
                'isactive' => true,
                'isdeleted' => false,
            ],
            [
                'experience' => 'System Analyst',
                'description' => 'As a System Analyst, my role involves collaborating closely with our client, PT. HM Sampoerna, to gather, analyze, and document software requirements for various projects. I act as a key liaison between the client and the development team, ensuring that their needs are clearly understood and translated into functional specifications for system design and implementation.',
                'company' => 'ISS Indonesia',
                'startyear' => 2019,
                'endyear' => 2020,
                'createdby' => 'admin',
                'createddate' => Carbon::now(),
                'updatedby' => 'admin',
                'updateddate' => Carbon::now(),
                'isactive' => true,
                'isdeleted' => false,
            ],
            [
                'experience' => 'IT Support Analyst',
                'description' => 'As an IT Support Analyst at ISS Indonesia, I am assigned to work directly with PT. HM Sampoerna to ensure the smooth operation of all applications and provide technical support for their software-related needs. My primary responsibility is to troubleshoot and resolve application issues, as well as manage the development of new software projects in alignment with PT. HM Sampoerna business requirements.',
                'company' => 'ISS Indonesia',
                'startyear' => 2021,
                'endyear' => 2025,
                'createdby' => 'admin',
                'createddate' => Carbon::now(),
                'updatedby' => 'admin',
                'updateddate' => Carbon::now(),
                'isactive' => true,
                'isdeleted' => false,
            ],
        ]);
    }
}
