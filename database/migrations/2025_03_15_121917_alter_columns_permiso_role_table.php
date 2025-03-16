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
        Schema::table('permiso_role', function (Blueprint $table) {
            $table->unique(['permiso_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permiso_role', function (Blueprint $table) {
            $table->dropUnique(['permiso_id', 'role_id']);
        });
    }
};
