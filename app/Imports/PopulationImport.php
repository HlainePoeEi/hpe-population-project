<?php

namespace App\Imports;

use App\Models\Population;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PopulationImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Population([
            'prefecture'       => $row['prefecture'],
            'year'             => (int) $row['year'],
            'total_population' => (int) $row['total_population'],
        ]);
    }
}
