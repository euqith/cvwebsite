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
        Schema::create('tb_m_experiences', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID field
            $table->string('experience'); // Nama pengalaman
            $table->string('description'); // Deskripsi pengalaman
            $table->string('company'); // Nama perusahaan
            $table->year('startyear'); // Tahun mulai
            $table->year('endyear'); // Tahun selesai
            $table->string('createdby'); // Nama pembuat data
            $table->timestamp('createddate')->useCurrent(); // Tanggal dibuat, default ke waktu sekarang
            $table->string('updatedby'); // Nama yang memperbarui data
            $table->timestamp('updateddate')->useCurrent()->useCurrentOnUpdate(); // Tanggal diperbarui, default ke waktu sekarang, update otomatis saat data diubah
            $table->boolean('isactive')->default(true); // Status aktif, default true
            $table->boolean('isdeleted')->default(false); // Status deleted, default false
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_m_experiences');
    }
};
