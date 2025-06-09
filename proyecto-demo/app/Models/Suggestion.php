<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suggestion extends Model
{
    use HasFactory;
    /**
     * Atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'contact_name',
        'contact_email',
        'suggested_name',
        'suggested_age',
        'suggested_nationality',
        'suggested_position',
        'message',
        // 'status' si lo añades
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

