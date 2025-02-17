<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Population;

class PopulationController extends Controller
{
    public function search(Request $request)
    {
        $prefecture = $request->input('prefecture');
        $year = $request->input('year');
        
        $population = Population::where('prefecture', $prefecture)
                             ->where('year', $year)
                             ->first();

        if (!$population) {
            // Return the view with an error message
            return view('search', compact('prefecture', 'year'))
                   ->with('error', 'No data !!!');
        }

        return view('search', compact('population', 'prefecture', 'year'));
    }
}
