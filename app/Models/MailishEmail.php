<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\User;

class MailishEmail extends Model{
    use HasFactory;

    protected $fillable =[
            'to', 'from', 'body', 'subject', 'status'
        ];

    public function userFrom(){
        return $this->belongsTo(User::class, 'from')->withDefault([
            'name' => 'System Message'
        ]);
    }

    protected $attributes = [
        'status' => 1
    ];

}
