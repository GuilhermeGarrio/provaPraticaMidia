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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->string('product_brand')->nullable();
            $table->string('product_model')->nullable();
            $table->string('product_serial_number')->nullable();
            $table->string('product_processor')->nullable();
            $table->integer('product_memory')->nullable();
            $table->integer('product_disk')->nullable();
            $table->date('date')->nullable();
            $table->decimal('product_price', 10, 2)->nullable();
            $table->string('product_price_string')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
