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
        Schema::table('users', function (Blueprint $table) {
            $table->string('provider');
            $table->string('provider_id')->nullable();
            $table->string('provider_token')->nullable();
            $table->string('avatar')->default('https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->removeColumn('provider');
            $table->removeColumn('provider_id');
            $table->removeColumn('provider_token');
            $table->removeColumn('avatar');
        });
    }
};
