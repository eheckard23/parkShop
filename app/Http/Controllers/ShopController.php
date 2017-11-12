<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;

class ShopController extends Controller
{
    public function index(){

    	$albums = Album::take(2)->orderBy('created_at', 'desc')->get();

    	$latest = $albums[0];

    	$albums->shift();

    	return view('shop/index', ['albums' => $albums, 'latest' => $latest]);
    }
}
