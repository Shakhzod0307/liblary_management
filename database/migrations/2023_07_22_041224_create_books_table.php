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
            $table->string('name');
            $table->string('author')->nullable();
            $table->unsignedBigInteger('section_id');
            $table->string('cost')->nullable();
            $table->string('image')->nullable();
            $table->string('rate')->nullable();
            $table->unsignedBigInteger('page_size')->nullable();
            $table->string('publisher')->nullable();
            $table->text('description')->nullable();
            $table->string('issue')->nullable();
            $table->string('report')->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
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
