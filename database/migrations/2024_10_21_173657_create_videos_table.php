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
        Schema::create('videos', function (Blueprint $table) {
         
            $table->id();
            $table->string('title');
            $table->text('descp')->nullable();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('sub_domain_no')->nullable();
            $table->string('icon_image')->nullable();
            $table->string('file_name')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->softDeletes(); // for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
