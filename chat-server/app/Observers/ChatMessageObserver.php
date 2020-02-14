<?php

namespace App\Observers;

use App\ChatMessage;
use App\Events\ChatMessageCreated as ChatMessageCreatedEvent;

class ChatMessageObserver
{
    public function created(ChatMessage $message)
    {
        broadcast(new ChatMessageCreatedEvent($message));
    }
}
