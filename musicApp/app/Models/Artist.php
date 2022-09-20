<?php

namespace App\Models;

use App\Http\Controllers\ArtisthasGenreController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Models\artisthasgenre;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = [
        'artist',
        'slug',
        'img',
        'detail',
    ];

    public function artist(){
        return $this->hasMany(Song::class,'artist_id','id');
    }

    public function artistsgenres(){
        return $this->belongsToMany(Genre::class,'artisthasgenres');
    }

}
