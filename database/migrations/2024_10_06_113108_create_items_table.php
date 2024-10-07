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
        // Schema::create('items', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        //Tạo bảng
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('BookID')->unique(); 
            $table->string('title'); 
            $table->string('author'); 
            $table->year('published_year'); 
            $table->string('genre'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Xóa bảng nếu cần
        Schema::dropIfExists('items');
    }
};

// Schema::create('items', function (Blueprint $table) {
//     $table->id();
//     $table->string('name');
//     $table->text('description');
//     $table->timestamps();
// });

// Schema::create('books', function (Blueprint $table) {
//     $table->id();
//     $table->string('title');
//     $table->string('author');
//     $table->year('published_year');
//     $table->string('genre');
//     $table->timestamps();
// });