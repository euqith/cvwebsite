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
        Schema::table('tb_m_skills', function (Blueprint $table) {
            $table->renameColumn('isdelete', 'isdeleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_m_skills', function (Blueprint $table) {
            $table->renameColumn('isdeleted', 'isdelete');
        });
    }
};
