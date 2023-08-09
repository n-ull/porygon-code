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
        Schema::create('drafts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('content');
            $table->boolean('is_published')->default(false);
            $table->json('tags')->nullable();
            $table->json('images')->nullable();
            $table->timestamps();

            if (Schema::hasTable('users')) {
                // The "users" table exists...
                $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            }

            if(Schema::hasTable('categories')){
                // The "categories" table exists...
                $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drafts');
    }
};
