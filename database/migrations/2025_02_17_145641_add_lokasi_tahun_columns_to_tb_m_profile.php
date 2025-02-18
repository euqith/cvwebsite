<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tb_m_profile', function (Blueprint $table) {
            $table->string('lokasipendidikan1')->nullable(); // Menambahkan kolom lokasi pendidikan1
            $table->string('lokasipendidikan2')->nullable(); // Menambahkan kolom lokasi pendidikan2
            $table->string('lokasipendidikan3')->nullable(); // Menambahkan kolom lokasi pendidikan3
            $table->string('lokasipendidikan4')->nullable(); // Menambahkan kolom lokasi pendidikan4
            $table->string('lokasipendidikan5')->nullable(); // Menambahkan kolom lokasi pendidikan5

            $table->year('tahunlulus1')->nullable(); // Menambahkan kolom tahun lulus1
            $table->year('tahunlulus2')->nullable(); // Menambahkan kolom tahun lulus2
            $table->year('tahunlulus3')->nullable(); // Menambahkan kolom tahun lulus3
            $table->year('tahunlulus4')->nullable(); // Menambahkan kolom tahun lulus4
            $table->year('tahunlulus5')->nullable(); // Menambahkan kolom tahun lulus5
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_m_profile', function (Blueprint $table) {
            //
        });
    }
};
