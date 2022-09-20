<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\artisthasgenre;
use App\Models\Genre;
use Illuminate\Http\Request;

class ArtisthasGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists= Artist::all();
        return view('admin.musicapp.view_artisthasgenre',compact('artists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists= Artist::all();
        $genres= Genre::all();
        return view('admin.musicapp.artisthasgenre',compact('artists', 'genres'));
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
            'artist_id'=>'required',
            'genre_ids'=>'required'
        ]);
        $artist=Artist::findOrFail($request->artist_id);
        $artist->artistsgenres()->sync($request->genre_ids);
//       dd($artist);
        return redirect()->back()->with('success',' created successfully.');

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
