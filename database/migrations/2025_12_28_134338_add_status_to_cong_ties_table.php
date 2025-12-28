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
        Schema::table('cong_ties', function (Blueprint $table) {
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active')->comment('Trạng thái công ty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cong_ties', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
