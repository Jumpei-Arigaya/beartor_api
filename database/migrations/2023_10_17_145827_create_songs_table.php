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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // 曲のタイトル
            $table->string('artist');       // アーティスト名
            $table->string('album')->nullable();  // アルバム名（null可）
            $table->string('genre')->nullable();  // ジャンル（null可）
            $table->integer('duration')->nullable(); // 曲の長さ（秒数、null可）
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
