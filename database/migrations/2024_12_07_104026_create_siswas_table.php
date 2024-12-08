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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();
            $table->date('tgl');
            $table->string('telp', 13);
            $table->enum('jk', ['L', 'P']);
            $table->string('alamat');
            $table->string('kk');
            $table->string('akta');
            $table->string('skl');
            $table->string('kis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
