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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Reference to the user making the order
            $table->string('order_type'); // Type of order
            $table->decimal('amount', 10, 2); // Total amount of the order
            $table->text('details')->nullable(); // Additional details about the order
            $table->enum('status', ['pending', 'completed', 'canceled']); // Status of the order
            $table->timestamps();

            // Foreign key constraint (assuming a users table exists)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
