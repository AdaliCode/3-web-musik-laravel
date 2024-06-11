<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    public function singers()
    {
        return $this->belongsToMany(Singer::class, 'singer_song');
    }
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
