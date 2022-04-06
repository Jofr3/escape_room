<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'rooms';

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
