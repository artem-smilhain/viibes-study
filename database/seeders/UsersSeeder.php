<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Andrei',
            'last_name' => 'Smilhain',
            'email' => 'andrei.smilgain@gmail.com',
            'password' => '$2y$10$jH7k1pAEdPQ3a1d0t3H0BOFtiXFWFIV1xulELzuLwOwbrzNeziX2m',
            'gender_id' => User::GENDER_ID_MALE,
            'birth_date' => '2002-07-17',
            'citizenship' => 'ukrainian',
            'country_id' => 1,
            'status_id' => User::STATUS_ACTIVE,
        ]);
        DB::table('users')->insert([
            'name' => 'Artem',
            'last_name' => 'Smilhain',
            'email' => 'smilhain@gmail.com',
            'password' => bcrypt('l0JL2Q^Cg0JgL%!UOB#'),
            'gender_id' => User::GENDER_ID_MALE,
            'birth_date' => '2002-07-17',
            'birth_place' => 'Dnipro',
            'messenger' => 'telegram',
            'citizenship' => 'ukrainian',
            'country_id' => 237,
            'status_id' => User::STATUS_ACTIVE,
        ]);
        DB::table('users')->insert([
            'name' => 'Palina',
            'last_name' => 'Parashchanka',
            'email' => 'pinilipa@mail.ru',
            'password' => bcrypt('83%BD4iAtr4XRN4!f2c'),
            'gender_id' => User::GENDER_ID_FEMALE,
            'birth_date' => '2001-03-15',
            'birth_place' => 'Svietlahorsk',
            'messenger' => 'telegram',
            'citizenship' => 'belarusian',
            'country_id' => 26,
            'status_id' => User::STATUS_ACTIVE,
        ]);


        $user = User::where('email', 'andrei.smilgain@gmail.com')->firstOrFail();
        $user->assignRole('admin');

        $user = User::where('email', 'smilhain@gmail.com')->firstOrFail();
        $user->assignRole('admin');

        $user = User::where('email', 'pinilipa@mail.ru')->firstOrFail();
        $user->assignRole('admin');


        Schema::enableForeignKeyConstraints();
    }
}
