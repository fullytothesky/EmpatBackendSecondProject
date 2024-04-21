<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('friend__interests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("friend_id");
            $table->unsignedBigInteger("interest_id");
            $table->foreign('friend_id')->references('id')->on('friends');
            $table->foreign('interest_id')->references('id')->on('interest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friend__interests');
    }
};
