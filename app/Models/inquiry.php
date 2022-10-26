<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquiry extends Model
{
    use HasFactory;
    protected $table = 'inquiries';

    protected $fillable =[
        'userid',
        'title',
        'content',
        'nickname'
    ];
}
