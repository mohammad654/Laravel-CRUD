<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs=Song::all();
//        dd($songs);
        return view('admin.view_songs',compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists=Artist::all();
        return view('admin.add_song',compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'songName'=>'required',
            'artist_id'=>'required',
            'songImage'=>'required'
        ]);
        $artists=Artist::findOrFail($request->artist_id);

//        dd($request->all());

        //      Store  DB
        if ($request->hasFile('songImage')) {
            $imageName = time() . '.' . $request->songImage->getClientOriginalExtension();
            $request->songImage-> move('songImage', $imageName);
            $artists->artist()->create([
                'song' => $request->songName,
                'image' => $imageName
            ]);
            return redirect()->back()->with('success','Song created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::findOrFail($id);
        $artists=Artist::all();
        return view('admin.update_song',compact('song'))->with('artists',$artists);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

//validate the input
        $request->validate([
//            'songName'=>'required',
//            'artist_id'=>'required',
//            'songImage'=>'required'
        ]);
        $song = Song::find($id);
        if ($request->songName){
            $song->song=$request->songName;
        }else{
            $song->song=$song->song;
        }
        if($request->artist_id){
            $song->artist_id=$request->artist_id;
        }else{
            $song->artist_id=$song->artist_id;
        }

        //      Store  DB

        if ($request->hasFile('songImage')) {
            $imageName = time() . '.' . $request->songImage->getClientOriginalExtension();
            $request->songImage-> move('songImage', $imageName);
            $song->image=$imageName;
        }

        $song->save();

        return redirect()->back()->with('success','Song created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::findOrFail($id);
        $song->delete();
        return redirect()->route('song.index')->with('success','song deleted successfully.');
    }
}
