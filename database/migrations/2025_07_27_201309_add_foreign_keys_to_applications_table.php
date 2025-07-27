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
        Schema::table('applications', function (Blueprint $table) {
            $table->foreign(['candidate_id'], 'applications_ibfk_1')->references(['id'])->on('candidates')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['job_id'], 'applications_ibfk_2')->references(['id'])->on('jobs')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropForeign('applications_ibfk_1');
            $table->dropForeign('applications_ibfk_2');
        });
    }
};
