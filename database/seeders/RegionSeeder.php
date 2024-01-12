<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name_uz' => 'Toshkent',
            'name_ru' => 'Ташкент',
            'name_en' => 'Tashkent'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Andijon',
            'name_ru' => 'Андижан',
            'name_en' => 'Andijan'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Buxoro',
            'name_ru' => 'Бухара',
            'name_en' => 'Bukhara'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Jizzax',
            'name_ru' => 'Джизак',
            'name_en' => 'Jizzakh'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Qashqadaryo',
            'name_ru' => 'Кашкадарья',
            'name_en' => 'Kashkadarya'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Navoi',
            'name_ru' => 'Навои',
            'name_en' => 'Navoi'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Namangan',
            'name_ru' => 'Наманган',
            'name_en' => 'Namangan'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Samarqand',
            'name_ru' => 'Самарканд',
            'name_en' => 'Samarkand'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Sirdaryo',
            'name_ru' => 'Сырдарья',
            'name_en' => 'Sirdarya'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Surxondaryo',
            'name_ru' => 'Сурхандарьинская',
            'name_en' => 'Surkhandarya'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Farg`ona',
            'name_ru' => 'Фергана',
            'name_en' => 'Fergana'
        ]);
        DB::table('regions')->insert([
            'name_uz' => 'Xorazm',
            'name_ru' => 'Хорезм',
            'name_en' => 'Khorezm'
        ]);
    }
}
