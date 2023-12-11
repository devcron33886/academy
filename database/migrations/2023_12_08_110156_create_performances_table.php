<?php

use App\Models\Player;
use App\Models\User;
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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Player::class)->index()->constrained();
            $table->foreignIdFor(User::class)->index()->constrained();
            $table->string('competition');
            $table->string('season');
            $table->integer('score_points');
            $table->integer('field_goal_percentage');
            $table->integer('free_throw_percentage');
            $table->integer('three_point_percentage');
            $table->integer('assists_per_game');
            $table->integer('turnovers_per_game');
            $table->integer('assists_to_turnovers_ratio');
            $table->integer('total_rebounds_per_game');
            $table->integer('offensive_rebounds_per_game');
            $table->integer('defensive_rebounds_per_game');
            $table->integer('steals_per_game');
            $table->integer('blocks_per_game');
            $table->integer('defensive_efficiency_rating');
            $table->integer('offensive_efficiency_rating');
            $table->integer('jump_height');
            $table->integer('speed');
            $table->integer('minutes_played');
            $table->longText('notes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};
