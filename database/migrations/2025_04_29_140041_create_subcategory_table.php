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
        Schema::create('subcategory', function (Blueprint $table) {
            $table->id();
            $table->string('subcategory_name');
            $table->unsignedBigInteger('categore_id');
            $table->string('slug_sub');
            $table->string('sub_order');
            $table->boolean('show_on_menu')->default(true);
            $table->timestamps();

            $table->foreign('categore_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategory');
    }
};
