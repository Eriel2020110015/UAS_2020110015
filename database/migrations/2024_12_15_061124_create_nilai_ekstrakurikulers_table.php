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
    Schema::create('nilai_ekstrakurikulers', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('ekstrakurikuler_id');
        $table->unsignedBigInteger('siswa_id');
        $table->decimal('nilai', 5, 2);
        $table->timestamps();

        $table->foreign('ekstrakurikuler_id')->references('id')->on('ekstrakurikulers')->onDelete('cascade');
        $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_ekstrakurikulers');
    }
};
