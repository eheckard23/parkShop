<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$artists = Artist::all()->toArray();

        return view('artist/index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artist/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artist = new Artist([
            'artist_name' => $request->get('artist_name'),
            'artist_site' => $request->get('artist_site'),
            'artist_genre' => $request->get('artist_genre'),
            'artist_bio' => $request->get('artist_bio'),
            'artist_img' => $request->get('artist_img')
        ]);

        $artist->save();
        return redirect('/artist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$artist = Artist::find($id);

        return view('artist/show', ['artist' => $artist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);

        return view('artist/edit', ['artist' => $artist]);
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
        $artist = Artist::find($id);
        $artist->artist_name = $request->get('artist_name');
        $artist->save();
        return redirect()->action('ArtistController@show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	echo "test";
        $artist = Artist::find($id);
        $artist->delete();

        return redirect('/artist');
    }
}
