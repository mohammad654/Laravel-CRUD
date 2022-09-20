<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';

    protected $fillable = ['genre'];

    public function genresartists(){
        return $this->belongsToMany(Artist::class,'artisthasgenres');
    }



//    genre
    public function genreSong(){
        return $this->hasOne(Song::class,'song_id','id');
    }

}
