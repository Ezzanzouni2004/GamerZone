<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'tournament_id'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
