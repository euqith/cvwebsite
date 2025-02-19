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
        Schema::table('tb_m_experiences', function (Blueprint $table) {
            $table->text('description')->change(); // Mengubah kolom 'description' menjadi tipe 'TEXT'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_m_experiences', function (Blueprint $table) {
            $table->string('description')->change(); // Mengubah kembali kolom 'description' menjadi tipe 'STRING' atau 'VARCHAR'
        });
    }
};
