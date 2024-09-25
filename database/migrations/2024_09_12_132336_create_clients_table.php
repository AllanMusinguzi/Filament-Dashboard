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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Client Name
            $table->string('email')->unique(); // Client Email (Unique)
            $table->string('phone', 20); // Phone number (Max 15 characters)
            $table->string('address')->nullable(); // Address (Nullable)
            $table->date('registered_at')->nullable(); // Registration date (Nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
