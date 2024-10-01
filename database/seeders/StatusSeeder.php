<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();

        \DB::table('statuses')->truncate();
        \DB::table('statuses')->insert([
            'title' => 'Добавлено в систему',
            'description' => 'Специальнось была добавлена в личный кабинет',
            'element_color' => '#003399',
        ]);
        \DB::table('statuses')->insert([
            'title' => 'Подготовка документов',
            'description' => 'Подготовка первого пакета документов для подачи заявления в университет',
            'element_color' => '#7360F2',
        ]);
        \DB::table('statuses')->insert([
            'title' => 'Заявление подано',
            'description' => 'Заявление в процессе рассмотрения',
            'element_color' => '#229ED9',
        ]);
        \DB::table('statuses')->insert([
            'title' => 'Заявление одобрено',
            'description' => 'Заявление успешно одобрено университетом',
            'element_color' => '#00AAA0',
        ]);
        \DB::table('statuses')->insert([
            'title' => 'Условное зачисление',
            'description' => 'Абитуриент условно зачислен на выбранную программу. Окончательное решение будет принято после предоставления нострификации аттестата',
            'element_color' => '#1E9769',
        ]);
        \DB::table('statuses')->insert([
            'title' => 'Абитуриент зачислен в ВУЗ',
            'description' => 'Поздравляем! Вы успешно прошли все этапы отбора и зачислены в университет',
            'element_color' => '#04BA00',
        ]);

        \Schema::enableForeignKeyConstraints();
    }
}
