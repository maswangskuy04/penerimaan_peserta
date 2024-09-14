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
        Schema::table('peserta_pelatihans', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jurusan');
            $table->unsignedBigInteger('id_gelombang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peserta_pelatihans', function (Blueprint $table) {
            //
        });
    }
};
