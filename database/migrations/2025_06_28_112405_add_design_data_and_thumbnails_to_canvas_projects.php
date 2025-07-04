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
        Schema::table('canvas_projects', function (Blueprint $table) {
            // Add the new design_data column (JSON)
            $table->json('design_data')->nullable()->after('project_data');
            
            // Add the thumbnails column (JSON)
            $table->json('thumbnails')->nullable()->after('design_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('canvas_projects', function (Blueprint $table) {
            $table->dropColumn(['design_data', 'thumbnails']);
        });
    }
};
