<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskLampItems extends Model{
    use HasFactory;

    protected $fillable = [
        'header', 'location', 'body'
    ];

}
