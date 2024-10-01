<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heading = true;
        $input_file = fopen(base_path("database/seeders/data/faculties.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $row = [
                    'id' => $record[0],
                    'name' => $record[1],
                    'name_sk' => $record[2],
                    'description' => $record[3] ?? ' ',
                    'university_id' => $record[5],
                ];
                Faculty::create($row);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
