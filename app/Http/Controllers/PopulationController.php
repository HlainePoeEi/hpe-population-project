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
        
        // Fetch the population data based on selected prefecture and year
        if ($prefecture !== 'Total' && $prefecture !== '全　国') {
            $population = Population::where('prefecture', $prefecture)
                ->where('year', $year)
                ->first();
        } else {
            // For 'Total' or '全　国', get the sum of all prefectures for the selected year
            $population = Population::where('year', $year)
                ->selectRaw('SUM(total_population) as total_population')
                ->first();
        }

        return view('search', compact('population', 'prefecture', 'year'));
    }
}
