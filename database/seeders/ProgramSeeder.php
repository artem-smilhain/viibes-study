<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heading = true;
        $input_file = fopen(base_path("database/seeders/data/programs.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $row = [
                    'id' => $record[0],
                    'name' => $record[1],
                    'name_sk' => $record[2],
                    'description' => $record[3] ?? ' ',
                    'years_of_study' => $record[4],
                    'is_in_combination' => $record[6],
                    'academic_degree_id' => $record[7],
                    'faculty_id' => $record[8],
                    'direction_id' => $record[9],
                ];
                Program::create($row);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
