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
        Schema::table('candidates', function (Blueprint $table) {
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('position_applied')->nullable()->after('last_name');
            $table->string('email')->unique()->after('position_applied');
            // $table->string('cv')->nullable()->after('email'); ← eliminar esta línea
        });
    }

    public function down(): void
    {
        Schema::table('candidates', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'position_applied', 'email']);
        });
    }
};
