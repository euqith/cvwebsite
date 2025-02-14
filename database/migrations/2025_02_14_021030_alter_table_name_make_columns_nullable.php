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
        Schema::table('tb_m_header', function (Blueprint $table) {
            // Mengubah kolom menjadi nullable
            $table->string('firstname')->nullable()->change();
            $table->string('lastname')->nullable()->change();
            $table->string('jobposition')->nullable()->change();
            $table->string('picturepath')->nullable()->change();
            $table->string('createdby')->nullable()->change();
       
       
     
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_m_header', function (Blueprint $table) {
            $table->string('firstname')->nullable(false)->change();
            $table->string('lastname')->nullable(false)->change();
            $table->string('jobposition')->nullable(false)->change();
            $table->string('picturepath')->nullable(false)->change();
            $table->string('createdby')->nullable(false)->change();
        });
    }
};
