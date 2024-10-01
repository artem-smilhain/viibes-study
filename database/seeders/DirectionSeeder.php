<?php

namespace Database\Seeders;

use App\Models\Direction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heading = true;
        $input_file = fopen(base_path("database/seeders/data/directions.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $row = [
                    'id' => $record[0],
                    'name' => $record[1],
                    'name_sk' => $record[2],
                    'description' => $record[3] ?? ' ',
                    'element_color' => $record[4],
                    'row_weight' => $record[5],
                ];
                Direction::create($row);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
