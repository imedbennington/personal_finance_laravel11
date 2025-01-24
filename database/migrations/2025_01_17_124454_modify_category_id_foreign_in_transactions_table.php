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
        Schema::table('transactions', function (Blueprint $table) {
            // Drop the existing foreign key constraint
            $table->dropForeign(['category_id']);

            // Re-add the foreign key with ON DELETE CASCADE
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            // Drop the ON DELETE CASCADE foreign key
            $table->dropForeign(['category_id']);

            // Re-add the foreign key without ON DELETE CASCADE
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
        });
    }
};
