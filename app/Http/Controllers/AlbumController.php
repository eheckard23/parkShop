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

        $rockAlbums = DB::table('albums')->where('album_genre', '=', 'Rock')->take(4)->get();
        $hipHopAlbums = DB::table('albums')->where('album_genre', '=', 'Hip-Hop')->take(4)->get();
        $popAlbums = DB::table('albums')->where('album_genre', '=', 'Pop')->take(4)->get();
        $rbAlbums = DB::table('albums')->where('album_genre', '=', 'R&B')->take(4)->get();
        $latinAlbums = DB::table('albums')->where('album_genre', '=', 'Latin')->take(4)->get();
        $classicalAlbums = DB::table('albums')->where('album_genre', '=', 'Classical')->take(4)->get();
        $jazzAlbums = DB::table('albums')->where('album_genre', '=', 'Jazz')->take(4)->get();
        $indieAlbums = DB::table('albums')->where('album_genre', '=', 'Indie')->take(4)->get();
        $metalAlbums = DB::table('albums')->where('album_genre', '=', 'Metal')->take(4)->get();
        $reggaeAlbums = DB::table('albums')->where('album_genre', '=', 'Reggae')->take(4)->get();
        $soulAlbums = DB::table('albums')->where('album_genre', '=', 'Soul')->take(4)->get();
        $punkAlbums = DB::table('albums')->where('album_genre', '=', 'Punk')->take(4)->get();
        $bluesAlbums = DB::table('albums')->where('album_genre', '=', 'Blues')->take(4)->get();
        $funkAlbums = DB::table('albums')->where('album_genre', '=', 'Funk')->take(4)->get();

        return view('album/index', [
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
     * Add to cart
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addToCart($id)
    {
        //
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
     * Display the specified resource.
     *
     * @param  string  $genre
     * @return \Illuminate\Http\Response
     */
    public function genre($genre)
    {
        $albums = DB::table('albums')->where('album_genre', '=', $genre)->get();

        return view('genre/index', ['title' => $genre, 'albums' => $albums]);
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
