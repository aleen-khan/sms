<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'sms_count',
        'total_count',
        'status',
        'sender_id',
        'draft',
        'total_receiver'
    ];

    /**
     * Get the user associated with the Message
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sender()
    {
        return $this->hasOne(MessageInfo::class, 'id');
    }
}
