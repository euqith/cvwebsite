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
        Schema::create('tb_m_skills', function (Blueprint $table) {
            $table->id(); // Otomatis membuat field id dengan auto increment dan primary key
            $table->string('skill')->nullable();
            $table->float('percentage')->nullable();
            $table->text('description')->nullable();
            $table->string('createdby');
            $table->timestamp('createddate')->useCurrent();
            $table->string('updatedby');
            $table->timestamp('updateddate')->useCurrent()->useCurrentOnUpdate();
            $table->boolean('isactive')->default(true);
            $table->boolean('isdelete')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_m_skills');
    }
};
