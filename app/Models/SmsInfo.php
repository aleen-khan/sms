<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsInfo extends Model
{
    use HasFactory;

    protected $fillable = [

        'number',
        'message_id',
        'group_id'

    ];
}
