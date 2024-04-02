<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_mhs');
            $table->string('nama_mhs');
            $table->string('alamat');
            $table->date('ttl');
            $table->string('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
