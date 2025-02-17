<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PopulationImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,xlsx|max:2048',
        ]);

        Excel::import(new PopulationImport, $request->file('file'));

        return back()->with('success', 'CSV imported successfully!');
    }
}
