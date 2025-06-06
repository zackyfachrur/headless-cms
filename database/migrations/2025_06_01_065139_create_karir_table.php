<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karirs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('job_title');
            $table->string('job_division');
            $table->string('job_location');
            $table->text('job_description');
            $table->date('job_deadline');
            $table->json('job_requirements');
            $table->enum('job_status', ['open', 'closed'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karirs');
    }
};
