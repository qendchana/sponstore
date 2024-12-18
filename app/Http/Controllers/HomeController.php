<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $sponsor = Sponsor::orderBy('name', 'asc')->get();

        return view('home', [
            'sponsor' => $sponsor
        ]);
    }

    public function search(Request $request){
        $query = $request->search;

        $sponsor = Sponsor::where('name', 'like', '%' . $query . '%')
                            ->orWhere('email', 'like', '%' . $query . '%')
                            ->get();

        return view('searchResult', compact('sponsor'));
    }
}
