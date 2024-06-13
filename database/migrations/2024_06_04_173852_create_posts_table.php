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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->boolean('status')->default(false);
            $table->text('content');
            $table->string('date');
            $table->string('seasons');
            $table->string('generos');
            $table->text('actors');
            $table->string('director');
            $table->string('plataforma');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');

            // foreing key 
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
