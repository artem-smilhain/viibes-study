<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();

        \DB::table('services')->truncate();
        \DB::table('services')->insert([
            'name_ru' => 'Комплексное поступление',
        ]);
        \DB::table('services')->insert([
            'name_ru' => 'Курсы словацкого языка',
        ]);
        \Schema::enableForeignKeyConstraints();
    }
}
