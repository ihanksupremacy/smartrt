<?php

namespace App\Http\Controllers;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('query');

        $masyarakats = Masyarakat::where('nama', 'LIKE', "%{$keyword}%")->get();

        return view('beranda.index', compact('masyarakats'));
    }
}
