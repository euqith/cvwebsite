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
            $table->string('jurusan1')->nullable(); // Menambahkan kolom jurusan1
            $table->string('jurusan2')->nullable(); // Menambahkan kolom jurusan2
            $table->string('jurusan3')->nullable(); // Menambahkan kolom jurusan3
            $table->string('jurusan4')->nullable(); // Menambahkan kolom jurusan4
            $table->string('jurusan5')->nullable(); // Menambahkan kolom jurusan5
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_m_profile', function (Blueprint $table) {
            $table->dropColumn('jurusan1'); // Menghapus kolom jurusan1
            $table->dropColumn('jurusan2'); // Menghapus kolom jurusan2
            $table->dropColumn('jurusan3'); // Menghapus kolom jurusan3
            $table->dropColumn('jurusan4'); // Menghapus kolom jurusan4
            $table->dropColumn('jurusan5'); // Menghapus kolom jurusan5
        });
    }
};
