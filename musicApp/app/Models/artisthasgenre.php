<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;

class artisthasgenre extends Model
{
    use HasFactory;

    protected $fillable = ['artist_id','genre_id'];

}
