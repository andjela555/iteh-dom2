<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieShow extends Model
{
    use HasFactory;
    protected $fillable = ['start', 'price', 'movie_id'];

    protected $with = ['movie', 'place'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
