<?php

namespace App\Models\Telemetry;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandLogs extends Model{
    use HasFactory;

    protected $fillable = [
        'job',
        'start_time',
        'end_time',
        'status',
        'output'
    ];

    public $statusKey = [
        0 => 'Running?',
        1 => 'Success',
        2 => 'Failed'
    ];

    public function getMyStatusAttribute(){
        return $this->statusKey[$this->attributes['status'] ?? 0];
    }

    public function scopeMyLogs(Builder $query, $job){
        return $query->where('job', 'LIKE', $job);
    }

}
