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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategory_id');
            $table->string('article_title');
            $table->string('article_img');
            $table->longText('article_detail');
            $table->integer('visitors');
            $table->integer('author_id')->nullable();
            $table->integer('meta_share');
            $table->integer('meta_comment');
            $table->timestamps();

            $table->foreign('subcategory_id')->references('id')->on('subcategory')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
