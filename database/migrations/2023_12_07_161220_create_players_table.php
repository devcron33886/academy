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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->index()->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->index()->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->index()->constrained()->onDelete('cascade');
            $table->foreignId('team_id')->index()->constrained()->onDelete('cascade');
            $table->string('name');
            $table->date('date_of_birth');
            $table->integer('height');
            $table->string('height_unit');
            $table->integer('weight');
            $table->string('weight_unit');
            $table->string('position');
            $table->string('image')->nullable();
            $table->string('skills')->nullable();
            $table->string('video_link')->nullable();
            $table->string('health_insurance');
            $table->longText('injury_history')->nullable();
            $table->string('medical_report')->nullable();
            $table->longText('bio')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
