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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->constrained(table: 'users');
            $table->timestamps();
            // DATETIME instead of TIMESTAMP column type
            // $table->dateTime('created_at')->useCurrent();
            // $table->dateTime('updated_at')->useCurrentOnUpdate()->nullable();
            $table->string('title');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
