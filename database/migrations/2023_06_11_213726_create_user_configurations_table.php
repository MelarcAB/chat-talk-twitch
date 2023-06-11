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
        Schema::create('user_configurations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            //tema default default
            $table->string('theme')->default('default');
            //user selected
            $table->string('user_selected')->default('default');

            //template
            $table->string('template_background')->default('default');
            $table->string('template_background_color')->default('#F0F8FF');
            $table->string('template_avatar')->default('default');
            $table->string('template_voice')->default('default');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_configurations');
    }
};
