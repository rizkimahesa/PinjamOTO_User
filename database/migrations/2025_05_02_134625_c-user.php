<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user', function(Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('username');
            $table->string('nama');
            $table->string('password');
            $table->enum('role', ['Konsumen', 'Admin', 'Owner'])->default('Konsumen');
            $table->string('telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
