<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    protected $table = 'notices';

    protected $fillable = [
        'userid',
        'type',
        'title',
        'content',
        'nickname'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
