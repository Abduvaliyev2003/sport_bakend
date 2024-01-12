<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fillials')->insert([
            'name_en' => 'Tashkent',
            'name_uz' => 'Toshkent',
            'name_ru' => 'Ташкент',
        ]);
        DB::table('fillials')->insert([
            'name_en' => 'Samarkhand',
            'name_uz' => 'Samarqand',
            'name_ru' => 'Самарканд',
        ]);
        DB::table('fillials')->insert([
            'name_en' => 'Nukus',
            'name_uz' => 'Nukus',
            'name_ru' => 'Нукус',
        ]);
        DB::table('fillials')->insert([
            'name_en' => 'Fargana',
            'name_uz' => 'Farg`ona',
            'name_ru' => 'Фергана',
        ]);
    }
}
