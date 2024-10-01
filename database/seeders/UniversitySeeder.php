<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heading = true;
        $input_file = fopen(base_path("database/seeders/data/universities.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $row = [
                    'id' => $record[0],
                    'name' => $record[1],
                    'name_sk' => $record[2],
                    'abbreviation' => $record[3],
                    'abbreviation_sk' => $record[4],
                    'description' => $record[5] ?? ' ',
                    'founding_year' => $record[6],
                    'address' => $record[7],
                    'address_sk' => $record[8],
                    'site_url' => $record[9],
                    'number_of_students' => str_replace(' ', '', $record[10]),
                    'logo_src' => $record[11] ?? ' ',
                    'thumbnail_src' => $record[12] ?? ' ',
                    'google_map_src' => $record[13] ?? ' ',
                    'education_cost_en' => $record[14],
                    'scholarships' => $record[15],
                    'row_weight' => $record[16],
                    'city_id' => $record[18],
                ];
                University::create($row);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
