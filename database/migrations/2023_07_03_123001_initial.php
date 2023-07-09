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
        Schema::create('game_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('game', function (Blueprint $table) {
            $table->string('launchcode')->unique()->primary();
            $table->string('name');
            $table->bigInteger('game_provider_id')->unsigned();
            $table->integer('rtp');

            $table->foreign('game_provider_id')->references('id')->on('game_providers');
        });

        Schema::create('brand_games', function (Blueprint $table) {
            $table->string('launchcode');
            $table->integer('brandid');
            $table->string('category');
            $table->boolean('hot');
            $table->boolean('new');

            $table->foreign('launchcode')->references('launchcode')->on('game');
        });

        Schema::create('game_brand_block', function (Blueprint $table) {
            $table->string('launchcode');
            $table->integer('brandid');

            $table->foreign('launchcode')->references('launchcode')->on('game');
        });

        Schema::create('game_country_block', function (Blueprint $table) {
            $table->string('launchcode');
            $table->integer('brandid');
            $table->string('country');

            $table->foreign('launchcode')->references('launchcode')->on('game');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('brand_games');
        Schema::drop('game_brand_block');
        Schema::drop('game_country_block');
        Schema::drop('game');
        Schema::drop('game_providers');
    }
};
