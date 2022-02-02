<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        '',
    ];

    public function ChatMessages()
    {
        return $this->hasMany(ChatMessage::class);
    }

    public function ChatRoomMembers()
    {
        return $this->hasMany(ChatMessage::class);
    }
}
