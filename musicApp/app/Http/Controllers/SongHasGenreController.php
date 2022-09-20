<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Models\Genre;
use  App\Models\SongHasGenre;


class SongHasGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.musicapp.view_songhasgenre');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $songs=Song::all();
        $genres=Genre::all();
        return view('admin.musicapp.songhasgenre',compact('songs','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'song_id'=>'required',
            'genre_id'=>'required'
        ]);
        $song=Song::findOrFail($request->song_id);
//        $song->songGenre()->save($request->genre_id);
        dd($song);

//        $song->songGenre()->create([
//            'song_id' => $request->song_id,
//            'genre_id' => $request->genre_id,
//        ]);
//        dd($song->songGenre());
//        SongHasGenre::create([
//            'song_id'=>4,
//            'genre_id'=>1,
//
//                ]
//        );
    //   dd( $song->songGenre());
     //   $song->songGenre()->sync($request->genre_id);
        //songGenre genreSong
      //  return redirect()->back()->with('success',' created successfully.');
//        dd($song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
