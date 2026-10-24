<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('ruang', function (Blueprint $table) {
        $table->id();
        $table->string('name_ruang', 50);
        $table->integer('kapasitas')->nullable();
    });
}
public function down(): void
{
    Schema::dropIfExists('ruang');
}
};
