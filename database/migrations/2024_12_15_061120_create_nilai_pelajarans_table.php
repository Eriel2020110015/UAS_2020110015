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
    Schema::create('nilai_pelajarans', function (Blueprint $table) {
        $table->id();
        $table->decimal('nilai_tugas', 5, 2);
        $table->decimal('nilai_ulangan', 5, 2);
        $table->decimal('nilai_uts', 5, 2);
        $table->decimal('nilai_uas', 5, 2);
        $table->decimal('nilai_keterampilan', 5, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_pelajarans');
    }
};
