<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    public function songs()
    {
        return $this->belongsToMany(Song::class, 'singer_song');
    }
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
