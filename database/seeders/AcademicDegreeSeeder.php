<?php

namespace Database\Seeders;

use App\Models\AcademicDegree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heading = true;
        $input_file = fopen(base_path("database/seeders/data/academic_degrees.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $row = [
                    'id' => $record[0],
                    'degree_title' => $record[1],
                    'degree_abbreviation' => $record[2],
                    'row_weight' => $record[3],
                ];
                AcademicDegree::create($row);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
