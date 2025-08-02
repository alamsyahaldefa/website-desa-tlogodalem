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
        Schema::table('artikel_desas', function (Blueprint $table) {
            // Menambah default value for author_name column
            $table->string('author_name')->change()->default('Admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
