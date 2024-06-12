<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie; // Import the Movie class
use App\Models\Person; // Import the Person class


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('name')     // FROM `movies` ORDER BY `name` ASC
            ->where('votes_nr', '>=', 10000) // WHERE `votes_nr` >= 10000
            ->limit(20)                      // LIMIT 20
            ->get();                         // SELECT
        return view('movies.index', compact('movies'));

        // $movies = DB::select('select * from movies order by rating DESC LIMIT 50');
        // return view('movies.index', compact('movies'));
    }

    // public function index()
    // {
    //     $movies = DB::select('select * from movies order by rating DESC LIMIT 50');
    //     return view('top-rated-movies.index', compact('movies'));
    // }

    // public function topRated()
    // {
    //     $movies = DB::select('select * from movies order by rating DESC LIMIT 50');
    //     return view('movies.top-rated', compact('movies'));
    // }

    public function shawshank()
    {
        // $movie = DB::select('select * from movies where name = "The Shawshank Redemption"');
        // $movie = collect($movie)->first();
        $movie = DB::table('movies')->where('name', 'The Shawshank Redemption')->first();
        return view('movies.detail', compact('movie'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $movies = Movie::where('name', 'LIKE', "%{$search}%")->get();

        if ($movies) {
            return view('movies.search', compact('movies'));
        } else {

            echo "No movies found";
            // handle the case where no movies match the search term
        }
    }
    // public function detail($id)
    // {
    //     $movie = Movie::find($id);
    //     return view('movies.detail', compact('movie'));
    // }
    public function people()
    {
        $person = Person::find(1);
        $movies = $person->movies;
        return view('movies.people', compact('movies'));
    }

}
