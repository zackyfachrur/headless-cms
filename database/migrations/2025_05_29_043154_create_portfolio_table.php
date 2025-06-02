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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->string('category_label');
            $table->string('image')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('demo_username')->nullable();
            $table->string('demo_password')->nullable();
            $table->boolean('in_progress')->default(false);
            $table->integer('progress')->nullable();
            $table->string('progress_note')->nullable();
            $table->string('detail_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
