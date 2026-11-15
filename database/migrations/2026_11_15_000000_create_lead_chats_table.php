<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Чаты Telegram, которые подписались на заявки по ссылке t.me/<бот>?start=<ключ>
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lead_chats', function (Blueprint $table) {
            $table->id();
            $table->string('chat_id', 32)->unique();
            $table->string('title', 150)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_chats');
    }
};
