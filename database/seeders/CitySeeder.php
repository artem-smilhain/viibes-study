<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        City::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/seeders/data/cities.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $row = [
                    'id' => $record[0],
                    'name' => $record[1],
                    'name_sk' => $record[2],
                    'row_weight' => $record[3],
                    'country_id' => 198, // Словакия
                ];
                City::create($row);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
