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
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->string('title');
            $table->text('body')->nullable();
            $table->string('post_image')->nullable();
            $table->string('tags')->nullable();
            $table->string('category')->default('دسته بندی نشده');
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
