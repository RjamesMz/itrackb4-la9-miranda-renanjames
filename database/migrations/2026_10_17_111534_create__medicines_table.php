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
       Schema::create('medicines', function (Blueprint $table) {
    $table->id();
    $table->string('name');          // short text
    $table->integer('stock')->nullable();        // a whole number
    $table->integer('expiry_date');        // true or false
    $table->string('type');   // may be left empty
    $table->boolean('is_available');   // may be left empty
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_medicines');
    }
};
