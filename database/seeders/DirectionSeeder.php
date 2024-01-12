<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directions')->insert([
            'title_en' => "Heads and deputies of sports educational institutions",
            'title_ru' => "Руководители и заместители спортивных учебных заведений",
            'title_uz' => "Sport ta’lim muassasalari rahbar va o‘rinbosarlari",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Instructory-methodisty sportivnyx uchebnyx zadevaniy",
            'title_ru' => "Инструкторско-методические спортивные учебные пособия",
            'title_uz' => "Sport ta’lim muassasalari instruktor-metodistlari",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Trainers of republican schools of higher sports skills, colleges of Olympic reserves, specialized sports schools for children and teenagers, specialized schools of Olympic reserves",
            'title_ru' => "Тренеры республиканских школ высшего спортивного мастерства, колледжей олимпийского резерва, специализированных детско-юношеских спортивных школ, специализированных школ олимпийского резерва",
            'title_uz' => "Respublika oliy sport mahorati maktablari, olimpiya zaxiralari kollejlari, ixtisoslashtirilgan bolalar-o‘smirlar sport maktablari, ixtisoslashtirilgan olimpiya zaxiralari maktablari trenerlari",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Trainers of sports schools for children and teenagers",
            'title_ru' => "Тренеры спортивных школ для детей и подростков",
            'title_uz' => "Bolalar-o‘smirlar sport maktablari trenerlari",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Sports psychologists",
            'title_ru' => "Спортивные психологи",
            'title_uz' => "Sport psixologlari",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Leaders and pedagogues of higher education institutions in physical education and sports",
            'title_ru' => "Руководители и педагоги высших учебных заведений по физической культуре и спорту",
            'title_uz' => "Oliy ta’lim muassasalarining jismoniy tarbiya va sport yo‘nalishlari bo‘yicha rahbar va pedagog kadrlari",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Physical education teachers of professional educational institutions (except for those specializing in physical education and sports)",
            'title_ru' => "Преподаватели физической культуры профессиональных образовательных учреждений (кроме специальностей физической культуры и спорта)",
            'title_uz' => "Professional ta’lim muassasalari jismoniy tarbiya fani o‘qituvchilari (jismoniy tarbiya va sportga ixtisoslashtirilganlar bundan mustasno)",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Physical education teachers of general secondary and secondary special educational organizations",
            'title_ru' => "Учителя физической культуры общеобразовательных и средних специальных образовательных организаций",
            'title_uz' => "Umumiy o‘rta va o‘rta maxsus ta’lim tashkilotlarijismoniy tarbiya fani o‘qituvchilari",
        ]);
        DB::table('directions')->insert([
            'title_en' => "Physical education instructors of pre-school educational organizations",
            'title_ru' => "Инструкторы по физической культуре дошкольных образовательных организаций",
            'title_uz' => "Maktabgacha ta’lim tashkilotlarijismoniy tarbiya instruktorlari",
        ]);
    }
}
