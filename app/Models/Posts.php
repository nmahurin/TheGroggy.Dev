<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model{
    use HasFactory;

    protected $fillable = [
        'title', 'order', 'shown', 'big', 'location', 'description',
        'url', 'svg', 'img', 'body'
    ];

}
