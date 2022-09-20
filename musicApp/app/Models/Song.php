<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Genre;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'song',
        'image',
        'artist_id',
    ];

    public function songs(){

        return $this->belongsTo(Artist::class,'artist_id','id');
    }


//    song
    public function songGenre(){
        return $this->belongsTo(Genre::class,'song_has_genres');
    }


}
