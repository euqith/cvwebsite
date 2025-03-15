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
        Schema::create('tb_m_user', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key 'id'
            $table->string('username')->unique(); // 'username' field, unique and not nullable
            $table->string('password'); // 'password' field, hashed and not nullable
            $table->string('firstname'); // 'firstname' field, not nullable
            $table->string('lastname')->nullable(); // 'lastname' field, nullable
            $table->string('createdby')->nullable(); // 'createdby' field, nullable
            $table->timestamp('createddate')->useCurrent(); // 'createddate', default is current timestamp
            $table->string('updatedby')->nullable(); // 'updatedby' field, nullable
            $table->timestamp('updateddate')->useCurrent()->nullable(); // 'updateddate', default current timestamp and updates on modify
            $table->boolean('isactive')->default(true); // 'isactive' field, default true (1)
            $table->boolean('isdeleted')->default(false); // 'isdeleted' field, default false (0)
            $table->timestamps(); // Laravel's default created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_m_user');
    }
};
