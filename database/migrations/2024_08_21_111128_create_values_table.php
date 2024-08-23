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
        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('data');
            $table->string('nama_toko');
            $table->integer('value1');
            $table->integer('value2');
            $table->integer('value3');
            $table->integer('value4');
            $table->integer('value5');
            $table->integer('value6');
            $table->integer('value7');
            $table->integer('value8');
            $table->integer('sum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('values');
    }
};
