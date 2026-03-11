<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Drop columns if they exist from previous failed migration
        if (Schema::hasColumn('visitors', 'browser')) {
            Schema::table('visitors', function (Blueprint $table) {
                $table->dropColumn(['browser', 'platform', 'device_type', 'visitor_id', 'visit_count', 'last_visit']);
            });
        }
        
        Schema::table('visitors', function (Blueprint $table) {
            $table->string('browser')->nullable()->after('user_agent');
            $table->string('platform')->nullable()->after('browser');
            $table->string('device_type')->nullable()->after('platform');
            $table->string('visitor_id')->nullable()->after('id');
            $table->integer('visit_count')->default(1)->after('city');
            $table->timestamp('last_visit')->nullable()->after('visit_count');
        });
        
        // Populate existing records with unique visitor_ids
        DB::statement('UPDATE visitors SET visitor_id = MD5(CONCAT(id, ip_address, COALESCE(user_agent, ""))) WHERE visitor_id IS NULL');
        
        // Now make visitor_id unique
        Schema::table('visitors', function (Blueprint $table) {
            $table->unique('visitor_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visitors', function (Blueprint $table) {
            $table->dropColumn(['browser', 'platform', 'device_type', 'visitor_id', 'visit_count', 'last_visit']);
        });
    }
};
