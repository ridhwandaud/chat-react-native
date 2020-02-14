<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->unsignedBigInteger('chat_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table
                ->foreign('chat_id')
                ->references('id')
                ->on('chats');
            
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }
}
