<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'self_introduction',
        'sex',
        'img_name',
    ];

    public function Reactions()
    {
        return $this->hasMany(Reaction::class, 'from_member_id');
    }

    public function ChatMessages()
    {
        return $this->hasMany(ChatMessage::class);
    }

    public function ChatRoomMembers()
    {
        return $this->hasMany(ChatMessage::class);
    }
}
