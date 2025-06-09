<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'nationality',
        'position_id',
        'goals',
        'matches',
        'assists',
        'image',
    ];

    public function position() {
        return $this->belongsTo(Position::class);
    }
}

