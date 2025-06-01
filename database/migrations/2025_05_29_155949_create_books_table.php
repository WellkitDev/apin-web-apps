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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover');
            $table->string('pdf');
            $table->string('isbn')->nullable();
            $table->string('link_isbn')->nullable();
            $table->string('link_google_books')->nullable();
            $table->string('halaman')->nullable();
            $table->string('author')->nullable();
            $table->string('description'); //please modif string to longtext
            $table->string('publish_date')->nullable();
            $table->string('amout')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
