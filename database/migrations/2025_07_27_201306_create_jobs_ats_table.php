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
        Schema::create('jobs_ats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id')->index('company_id');
            $table->string('title');
            $table->text('description');
            $table->string('location')->nullable();
            $table->decimal('salary', 10)->nullable();
            $table->enum('type', ['full-time', 'part-time', 'contract'])->nullable()->default('full-time');
            $table->enum('status', ['open', 'closed'])->nullable()->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_ats');
    }
};
