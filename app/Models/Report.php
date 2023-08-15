<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'message',
        'status',
        'comment',
    ];

    public function customer(){
        return $this->belongsTo(User::class);
    }
}
