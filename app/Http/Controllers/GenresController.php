<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Genre;
use DB;

class GenresController extends Controller
{
    public function index()
    {
        $genres = DB::select('select * from genres order by name LIMIT 10');
        // $genres = DB::table('genres')->get();
        // $genres = Genre::get();
        return view('genres.index', compact('genres'));
    }

    //
}
