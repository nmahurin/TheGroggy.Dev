<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model{
    use HasFactory;

    static function booted(){
        static::creating(function($post){
            if( !isset($post->attributes['order']) ){
                $post->attributes['order'] = Projects::orderByDesc('order')->first()->order;
            }
        });

    }

    protected $fillable = [
        'title', 'order', 'shown', 'big', 'location', 'description',
        'url', 'svg', 'img', 'body', 'span'
    ];

    protected $attributes = [
        'span' => 1,
    ];

}
