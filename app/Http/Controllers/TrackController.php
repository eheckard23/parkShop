<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use App\Track;

class TrackController extends Controller
{

    public function __construct() {

        $this->middleware('auth', ['only' => [
            'create',
            'store',
            'edit',
            'update',
            'destroy'
        ]]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $album = Album::find($id);

        return view('track/create', ['album' => $album]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $albumId = $request->get('albumId');
        $album = Album::find($albumId);

        $track = new Track([
            'track_title' => $request->get('track_title'),
            'track_length' => $request->get('track_length')
        ]);

        $album->tracks()->save($track);

        return redirect()->action('AlbumController@show', $albumId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $track = Track::find($id);

        return view('track/show', ['track' => $track]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $track = Track::find($id);

        return view('track/edit', ['track' => $track]);
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
        $track = Track::find($id);
        $track->track_title = $request->get('track_title');
        $track->track_length = $request->get('track_length');
        $track->save();

        return redirect()->action('AlbumController@show', $request->get('albumId'));
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
