<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{

    public function index()
    {
        $albums=Album::all();
        return view('admin.view_albums',compact('albums'));    }

    public function create()
    {
        return view('admin.add_album');
    }


    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'albumName'=>'required',
            'date'=>'required',
            'albumImage'=>'required'
        ]);
//      Store  DB
        if ($request->hasFile('albumImage')) {
            $imageName = time() . '.' . $request->albumImage->getClientOriginalExtension();
            $request->albumImage-> move('albumsImage', $imageName);
            Album::create([
                'album' => $request->albumName,
                'date' => $request->date,
                'img' => $imageName
            ]);
            return redirect()->back()->with('success','Album  created successfully.');
        }
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('admin.album_update',compact('album'));
    }

    public function update(Request $request, $id)
    {
        //validate the input
        $request->validate([
            'albumName'=>'required',
            'date'=>'required',
//            'albumImage'=>'required',
        ]);
        //      Store  DB
        $album = Album::find($id);
        $album->album=$request->albumName;
        $album->date=$request->date;



        if ($request->hasFile('albumImage')) {
            $imageName = time() . '.' . $request->albumImage->getClientOriginalExtension();
            $request->albumImage-> move('albumsImage', $imageName);
            $album->img=$imageName;
        }
        $album->save();
        return redirect()->route('album.index')->with('success','Album updated successfully.');

    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();
        return redirect()->route('album.index')->with('success','Album deleted successfully.');
    }
}
