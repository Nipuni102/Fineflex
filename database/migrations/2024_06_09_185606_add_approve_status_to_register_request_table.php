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
        Schema::table('register_request', function (Blueprint $table) {
            $table->tinyInteger('approve_status')->default(0)->comment('0 = Pending, 1 = Approved, 2 = Reject')->after('mobile_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('register_request', function (Blueprint $table) {
            $table->dropColumn('approve_status');
        });
    }
};
