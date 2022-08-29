<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = ['theatre_name', 'address', 'room_number', 'capacity'];

    public function movie_shows()
    {
        return $this->hasMany(MovieShow::class);
    }
}
