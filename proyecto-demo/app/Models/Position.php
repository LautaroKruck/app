<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{   
    use HasFactory;
    /**
     * Atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];
    public $timestamps = false;
    
    public function players() {
        return $this->hasMany(Player::class);
    }
}

