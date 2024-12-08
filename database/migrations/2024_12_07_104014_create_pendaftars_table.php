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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik', 16)->unique();
            $table->date('tgl');
            $table->string('telp', 13);
            $table->string('email', 50);
            $table->enum('jk', ['L', 'P']);
            $table->string('alamat');
            $table->string('kk')->nullable();
            $table->string('akta')->nullable();
            $table->string('skl')->nullable();
            $table->string('kis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
