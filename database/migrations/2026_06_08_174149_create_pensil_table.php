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
    Schema::create('pensil', function (Blueprint $table) {
        // id() di Laravel otomatis menjadi INT, AUTO_INCREMENT, dan PRIMARY KEY
        $table->id('kodepensil');
        $table->string('merkpensil', 30);
        $table->integer('stockpensil');
        $table->char('tersedia', 1);
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pensil');
    }
};
