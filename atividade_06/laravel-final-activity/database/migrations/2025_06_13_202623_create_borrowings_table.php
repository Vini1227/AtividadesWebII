<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->timestamp('borrowed_at');
            $table->timestamp('returned_at')->nullable();
            $table->timestamps();
            
            // Adicione indexes para melhor performance
            $table->index('user_id');
            $table->index('book_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
};