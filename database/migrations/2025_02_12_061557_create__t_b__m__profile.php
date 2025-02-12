<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_m_header', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('jobposition');
            $table->string('picturepath');
            $table->string('createdby');
            $table->timestamp('createddate')->useCurrent=true;
            $table->string('updatedby');
            $table->timestamp('updateddate')->useCurrent=true;
            $table->boolean('isactive')->default(1);
            $table->boolean('isdeleted')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_m_header');
    }
};
