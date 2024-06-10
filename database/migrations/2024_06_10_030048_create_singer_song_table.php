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
        Schema::create('singer_song', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('singer_id');
            $table->unsignedBiginteger('song_id');
            $table->foreign('singer_id')->references('id')
                ->on('singers')->onDelete('cascade');
            $table->foreign('song_id')->references('id')
                ->on('songs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singer_song');
    }
};
