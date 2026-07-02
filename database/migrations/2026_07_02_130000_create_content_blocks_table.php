<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('section');
            $table->string('element_key');
            $table->string('type');
            $table->text('value')->nullable();
            $table->timestamps();
            
            // Unique key to prevent duplicates
            $table->unique(['page', 'section', 'element_key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_blocks');
    }
};
