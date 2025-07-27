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
        Schema::table('jobs_ats', function (Blueprint $table) {
            $table->foreign(['company_id'], 'jobs_ats_ibfk_1')->references(['id'])->on('companies')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs_ats', function (Blueprint $table) {
            $table->dropForeign('jobs_ats_ibfk_1');
        });
    }
};
