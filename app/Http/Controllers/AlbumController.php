<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Artist;
use App\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        $rockAlbums = DB::table('albums')->where('genre', 'Rock');
        $hipHopAlbums = DB::table('albums')->where('genre', 'Hip-Hop');
        $popAlbums = DB::table('albums')->where('genre', 'Pop');
        $rbAlbums = DB::table('albums')->where('genre', 'R&B');
        $latinAlbums = DB::table('albums')->where('genre', 'Latin');
        $classicalAlbums = DB::table('albums')->where('genre', 'Classical');
        $jazzAlbums = DB::table('albums')->where('genre', 'Jazz');
        $indieAlbums = DB::table('albums')->where('genre', 'Indie');
        $metalAlbums = DB::table('albums')->where('genre', 'Metal');
        $reggaeAlbums = DB::table('albums')->where('genre', 'Reggae');
        $soulAlbums = DB::table('albums')->where('genre', 'Soul');
        $punkAlbums = DB::table('albums')->where('genre', 'Punk');
        $bluesAlbums = DB::table('albums')->where('genre', 'Blues');
        $funkAlbums = DB::table('albums')->where('genre', 'Funk');

        return view('album/index', [
            'albums' => $albums,
            'rockAlbums' => $rockAlbums,
            'hipHopAlbums' => $hipHopAlbums,
            'popAlbums' => $popAlbums,
            'rbAlbums' => $rbAlbums,
            'latinAlbums' => $latinAlbums,
            'classicalAlbums' => $classicalAlbums,
            'jazzAlbums' => $jazzAlbums,
            'indieAlbums' => $indieAlbums,
            'metalAlbums' => $metalAlbums,
            'reggaeAlbums' => $reggaeAlbums,
            'soulAlbums' => $soulAlbums,
            'punkAlbums' => $punkAlbums,
            'bluesAlbums' => $bluesAlbums,
            'funkAlbums' => $funkAlbums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('album/create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artistId = $request->get('artistId');
        $artist = Artist::find($artistId);

        $album = new Album([
            'album_title' => $request->get('album_title'),
            'img_url' => $request->get('img_url'),
            'album_genre' => $request->get('album_genre'),
            'release_date' => $request->get('release_date'),
            'in_stock' => $request->get('in_stock'),
            'price' => $request->get('price'),
        ]);

        $artist->albums()->save($album);

        return redirect()->action('ArtistController@show', $artistId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id);

        return view('album/show', ['album' => $album]);
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
