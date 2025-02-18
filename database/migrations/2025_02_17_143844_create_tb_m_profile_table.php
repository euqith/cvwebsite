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
        Schema::create('tb_m_profile', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom 'id' sebagai primary key
            $table->string('pendidikan1')->nullable(); // Kolom pendidikan1
            $table->string('pendidikan2')->nullable(); // Kolom pendidikan2
            $table->string('pendidikan3')->nullable(); // Kolom pendidikan3
            $table->string('pendidikan4')->nullable(); // Kolom pendidikan4
            $table->string('pendidikan5')->nullable(); // Kolom pendidikan5
            $table->text('description')->nullable(); // Kolom description
            $table->string('createdby')->nullable(); // Kolom createdby
            $table->timestamp('createddate')->useCurrent(); // Kolom createddate dengan default current timestamp
            $table->string('updatedby')->nullable(); // Kolom updatedby
            $table->timestamp('updateddate')->useCurrent()->nullable(); // Kolom updateddate dengan default current timestamp
            $table->boolean('isactive')->default(1); // Kolom isactive dengan default nilai 1
            $table->boolean('isdeleted')->default(0); // Kolom isdeleted dengan default nilai 0

            $table->timestamps(); // Menambahkan created_at dan updated_at secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_m_profile');
    }
};
