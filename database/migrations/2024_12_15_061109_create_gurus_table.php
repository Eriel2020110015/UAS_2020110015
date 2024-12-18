<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('gurus', function (Blueprint $table) {
        $table->id();
        $table->string('kode_guru')->unique();
        $table->string('nama_guru');
        $table->string('jabatan');
        $table->string('mata_pelajaran');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
