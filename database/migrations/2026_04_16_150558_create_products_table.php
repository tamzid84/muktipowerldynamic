<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // 🔗 Relationship
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->onDelete('cascade');

            // Product Info
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->longText('description');

            // Features stored as JSON
            $table->json('features')->nullable();

            // Images
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();

            // Optional fields
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->decimal('price', 12, 2)->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};