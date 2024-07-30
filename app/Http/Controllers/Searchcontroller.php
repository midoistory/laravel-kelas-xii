<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('cari');
        $film = Film::where('title', 'like', "%".$keyword."%")->paginate(18);

        return view('components.searchresult', compact('film'));
    }
}
