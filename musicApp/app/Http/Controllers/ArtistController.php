<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists=Artist::all();
        return view('admin.view_artists',compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_artist');
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
            'artistName'=>'required',
            'slug'=>'required',
            'artistImage'=>'required',
            'detail'=>'required',
        ]);
//      Store  DB
        if ($request->hasFile('artistImage')) {
            $imageName = time() . '.' . $request->artistImage->getClientOriginalExtension();
            $request->artistImage-> move('artistImage', $imageName);
            Artist::create([
                'artist' => $request->artistName,
                'slug' => $request->slug,
                'img' => $imageName,
                'detail' => $request->detail
            ]);
            return redirect()->back()->with('success','Artist  created successfully.');
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
        $artist = Artist::findOrFail($id);
        return view('admin.artist_update',compact('artist'));
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
        //validate the input
        $request->validate([
            'artistName'=>'required',
            'slug'=>'required',
//            'artistImage'=>'required',
            'detail'=>'required',
        ]);
        //      Store  DB
        $artist = Artist::find($id);
        $artist->artist=$request->artistName;
        $artist->slug=$request->slug;
        $artist->detail=$request->detail;


        if ($request->hasFile('artistImage')) {
            $imageName = time() . '.' . $request->artistImage->getClientOriginalExtension();
            $request->artistImage-> move('artistImage', $imageName);
            $artist->img=$imageName;
        }
        $artist->save();
        return redirect()->route('artist.index')->with('success','Artist updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return redirect()->route('artist.index')->with('success','Artist deleted successfully.');
    }
}
