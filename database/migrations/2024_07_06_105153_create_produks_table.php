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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk')->unique();
            $table->integer('harga');
            $table->foreignId('kategori_id')->constrained();
            $table->foreignId('subkategori_id')->nullable()->constrained();
            $table->foreignId('merek_id')->constrained();
            $table->integer('img')->nullable();
            $table->integer('subimage')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
