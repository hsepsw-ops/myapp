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
        Schema::create('pengawalans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('grup')->nullable();
            $table->date('tanggal');
            $table->string('yang_dikawal');
            $table->text('rute_pengawalan')->nullable();
            $table->string('evidence')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations. testing
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawalans');
    }
};
