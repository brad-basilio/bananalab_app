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
        Schema::table('item_specifications', function (Blueprint $table) {
           DB::statement("ALTER TABLE item_specifications MODIFY COLUMN type ENUM('principal', 'general', 'icono') NOT NULL");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('item_specifications', function (Blueprint $table) {
            DB::statement("ALTER TABLE item_specifications MODIFY COLUMN type ENUM('principal', 'general') NOT NULL");
        });
    }
};
