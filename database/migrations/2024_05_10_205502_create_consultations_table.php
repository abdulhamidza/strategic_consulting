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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreignId('consultant_id')
                ->references('id')
                ->on('consultants')
                ->onDelete('cascade');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('date');
            $table->integer('duration');
            $table->string('status', 25)->nullable()->default('pending');
            $table->text('review')->nullable();
            $table->string('customer_entity');
            $table->double('fee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
