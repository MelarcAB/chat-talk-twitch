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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //username
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            //twitch
            $table->string('twitch_id')->nullable();
            $table->rememberToken();
            //img
            $table->string('img')->nullable();
            $table->timestamps();
            //enabled default 1
            $table->boolean('enabled')->default(1);
            //enable soft deletes
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
