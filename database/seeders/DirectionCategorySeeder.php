<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direction_categories')->insert([
            'direction_id' => 1,
            'category_uz' => 'Jismoniy tarbiya va sport sohasidagi ma’lumoti',
            'category_en' => 'Education in the field of physical education and sports',
            'category_ru' => 'Образование в области физического воспитания и спорта',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy', 'score'=>10, 'checked'=> false],
                ['name_en' => 'higher', 'score'=>10, 'checked'=> false],
                ['name_ru' => 'выше', 'score'=>10, 'checked'=> false],
                ['name_uz' => 'qayta tayyorlash', 'score'=>10, 'checked'=> false],
                ['name_en' => 'retraining', 'score'=>10, 'checked'=> false],
                ['name_ru' => 'переподготовка', 'score'=>5, 'checked'=> false]
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 1,
            'category_uz' => 'Rahbarlik davridagi sport-ta’lim muassasasining faoliyat samaradorligi reytingi',
            'category_en' => 'Performance rating of the sports-educational institution during the leadership period',
            'category_ru' => 'Рейтинг эффективности спортивно-образовательного учреждения в период руководства',
            'sub_category' => json_encode([
                ['name_uz' => 'Reytingning birinchi yigirmataligida yigirmataligida (1 — 20-o‘rinlar)', 'score' => 50, 'checked'=> false],
                ['name_en' => 'In the top twenty of the rating (1st - 20th places)', 'score' => 50, 'checked'=> false],
                ['name_ru' => 'В первой двадцатке рейтинга (1-20 места)', 'score' => 50, 'checked'=> false],
                ['name_uz' => 'Reytingning ikkinchi (21 — 40-o‘rinlar)', 'score'=> 30, 'checked'=> false ],
                ['name_en' => 'Second in the rating (21st — 40th places)', 'score'=> 30, 'checked'=> false ],
                ['name_ru' => 'Второе место в рейтинге (21-40 места)', 'score'=> 30, 'checked'=> false ],
                ['name_uz' => 'Reytingning uchinchi yigirmataligida (41 — 60-o‘rinlar)', 'score' => 20, 'checked'=> false],
                ['name_en' => 'In the third twenty of the rating (41st — 60th places)', 'score' => 20, 'checked'=> false],
                ['name_ru' => 'В третьей двадцатке рейтинга (41-60 места)', 'score' => 20, 'checked'=> false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 1,
            'category_uz' => 'Sport toifasi uchun:',
            'category_en' => 'For the sports category:',
            'category_ru' => 'Для спортивной категории:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_en' => 'master of sports of international class', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'мастер спорта международного класса', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'sport ustasi', 'score' => 5, 'checked'=>false],
                ['name_en' => 'master of sports', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'мастер спорта', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport ustaligiga nomzod', 'score' => 3, 'checked'=>false],
                ['name_en' => 'candidate for master of sports', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'кандидат в мастера спорта', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 1,
            'category_uz' => 'Sport turi bo‘yicha hakamlik toifasi uchun:',
            'category_en' => 'For the refereeing category by sport:',
            'category_ru' => 'Для категории судейства по видам спорта:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifa', 'score' => 5, 'checked'=>false ],
                ['name_en' => 'international category', 'score' => 5, 'checked'=>false ],
                ['name_ru' => 'международная категория', 'score' => 5, 'checked'=>false ],
                ['name_uz' => 'milliy toifa', 'score' => 3, 'checked'=>false ],
                ['name_en' => 'national category', 'score' => 3, 'checked'=>false ],
                ['name_ru' => 'национальная категория', 'score' => 3, 'checked'=>false ],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 1,
            'category_uz' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_en' => 'Preparation of educational and methodical literature:',
            'category_ru' => 'Подготовка учебно-методической литературы:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublikada tatbiq etilgan har bir yakka mualliflikdagi namunaviy o‘quv dastur', 'score' => 20, 'checked'=>false],
                ['name_en' => 'model curriculum of every single author implemented in the republic', 'score' => 20, 'checked'=>false],
                ['name_ru' => 'типовой учебный план каждого отдельного автора, реализованный в республике', 'score' => 20, 'checked'=>false],
                ['name_uz' => 'metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun', 'score' => 10, 'checked'=>false],
                ['name_en' => 'methodical guide, teaching-methodical recommendation, for developments', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'методическое пособие, учебно-методические рекомендации, для разработок', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 1,
            'category_uz' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_en' => 'The level of physical fitness according to the results of sports tests:',
            'category_ru' => 'Уровень физической подготовленности по результатам спортивных проб:',
            'sub_category' => json_encode([
                ['name_uz' => 'I o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 5, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'II o‘rin', 'score' => 3, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 3, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 3, 'checked'=>false],
                ['name_uz' => 'III o‘rin', 'score' => 2, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 2, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 2, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);

        DB::table('direction_categories')->insert([
            'direction_id' => 2,
            'category_uz' => 'Jismoniy tarbiya va sport sohasidagi ma’lumoti:',
            'category_en' => 'Education in the field of physical education and sports:',
            'category_ru' => 'Образование в области физической культуры и спорта:',
            'sub_category' => json_encode([
                ['name_uz' => 'tayanch oliy', 'score' => 10, 'checked'=>false],
                ['name_en' => 'base is high', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'база высокая', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'qayta tayyorlash', 'score' => 7, 'checked'=>false],
                ['name_en' => 'retraining', 'score' => 7, 'checked'=>false],
                ['name_ru' => 'переподготовка', 'score' => 7, 'checked'=>false],
                ['name_uz' => 'o‘rta-maxsus, professional', 'score' => 5, 'checked'=>false],
                ['name_en' => 'medium-special, professional', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'средне-специальный, профессиональный', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 2,
            'category_uz' => 'Sport toifasi uchun:',
            'category_en' => 'For the sports category:',
            'category_ru' => 'Для спортивной категории:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_en' => 'master of sports of international class', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'мастер спорта международного класса', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'sport ustasi', 'score' => 5, 'checked'=>false],
                ['name_en' => 'master of sports', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'мастер спорта', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_en' => 'candidate for master of sports', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'кандидат в мастера спорта', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 2,
            'category_uz' => 'Malaka toifasi uchun:',
            'category_en' => 'For the qualification category:',
            'category_ru' => 'По квалификационной категории:',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy toifa', 'score' => 15, 'checked'=>false],
                ['name_en' => 'higher category', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'высшая категория', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 10, 'checked'=>false],
                ['name_en' => 'first category', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'первая категория', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'second category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'вторая категория', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 2,
            'category_uz' => 'Sport turi bo‘yicha hakamlik toifasi uchun:',
            'category_en' => 'For the refereeing category by sport:',
            'category_ru' => 'Для категории судейства по видам спорта:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifa', 'score' => 10, 'checked'=>false],
                ['name_en' => 'international category', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'международная категория', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'milliy toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'national category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'национальная категория', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 2,
            'category_uz' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_en' => 'Preparation of educational and methodical literature:',
            'category_ru' => 'Подготовка учебно-методической литературы:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublikada tatbiq etilgan har bir yakka mualliflikdagi namunaviy o‘quv dastur', 'score' => 40, 'checked'=>false],
                ['name_en' => 'model curriculum of every single author implemented in the republic', 'score' => 40, 'checked'=>false],
                ['name_ru' => 'типовой учебный план каждого отдельного автора, реализованный в республике', 'score' => 40, 'checked'=>false],
                ['name_uz' => 'metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun', 'score' => 15, 'checked'=>false],
                ['name_en' => 'methodical guide, teaching-methodical recommendation, for developments', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'методическое пособие, учебно-методические рекомендации, для разработок', 'score' => 15, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 2,
            'category_uz' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_en' => 'The level of physical fitness according to the results of sports tests:',
            'category_ru' => 'Уровень физической подготовленности по результатам спортивных проб:',
            'sub_category' => json_encode([
                ['name_uz' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 10, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'II o‘rin', 'score' => 8, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 8, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'III o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 5, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 2,
            'category_uz' => 'Katta yo‘riqchi-uslubchi',
            'category_en' => 'Senior guide-stylist',
            'category_ru' => 'Старший гид-стилист',
            'sub_category' => json_encode([
                ['name_uz' => 'Katta yo‘riqchi-uslubchi', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Senior guide-stylist', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Старший гид-стилист', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'Sport toifasi uchun:',
            'category_en' => 'For the sports category:',
            'category_ru' => 'Для спортивной категории:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifadagi sport ustasi', 'score' => 5, 'checked'=>false],
                ['name_en' => 'master of sports of international class', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'мастер спорта международного класса', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport ustasi', 'score' => 3, 'checked'=>false],
                ['name_en' => 'master of sports', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'мастер спорта', 'score' => 3, 'checked'=>false],
                ['name_uz' => 'sport ustaligiga nomzod', 'score' => 2, 'checked'=>false],
                ['name_en' => 'candidate for master of sports', 'score' => 2, 'checked'=>false],
                ['name_ru' => 'кандидат в мастера спорта', 'score' => 2, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'Malaka toifasi uchun:',
            'category_en' => 'For the qualification category:',
            'category_ru' => 'По квалификационной категории:',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'higher category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'высшая категория', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'first category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'первая категория', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'ikkinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_en' => 'second category', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'вторая категория', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'Sport turi bo‘yicha hakamlik toifasi uchun:',
            'category_en' => 'For the refereeing category by sport:',
            'category_ru' => 'Для категории судейства по видам спорта:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'international category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'международная категория', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'milliy toifa', 'score' => 3, 'checked'=>false],
                ['name_en' => 'national category', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'национальная категория', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'Osiyo va parosiyo o‘yinlari, jahon va Osiyo chempionatlari hamda kuboklarining sovrindorini tayyorlaganligi uchun (har bir sportchi uchun):',
            'category_en' => 'For preparing the winner of the Asian and Asian Games, world and Asian championships and cups (for each athlete):',
            'category_ru' => 'Для подготовки победителя Азиатских и Азиатских игр, чемпионатов и кубков мира и Азии (для каждого спортсмена):',
            'sub_category' => json_encode([
                ['name_uz' => '1-o‘rin', 'score' => 20, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 20, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 20, 'checked'=>false],
                ['name_uz' => '2-o‘rin', 'score' => 15, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 15, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 15, 'checked'=>false],
                ['name_uz' => '3-o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 10, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'O‘zbekiston chempionati va kubogi sovrindorini tayyorlaganligi uchun (har bir sportchi uchun):',
            'category_en' => 'For training the winner of the Uzbekistan Championship and Cup (for each athlete):',
            'category_ru' => 'Для подготовки победителя Чемпионата и Кубка Узбекистана (для каждого спортсмена):',
            'sub_category' => json_encode([
                ['name_uz' => '1-o‘rin', 'score' => 15, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 15, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 15, 'checked'=>false],
                ['name_uz' => '2-o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 10, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 10, 'checked'=>false],
                ['name_uz' => '3-o‘rin', 'score' => 8, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 8, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 8, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'Sport musobaqa(turnir, liga, olimpiya cho‘qillari)lari g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_en' => 'For preparing the winner and prize-winner of sports competitions (tournaments, leagues, Olympic games):',
            'category_ru' => 'Для подготовки победителя и призера спортивных соревнований (турниров, лиг, олимпиад):',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 15, 'checked'=>false],
                ['name_en' => 'republic', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'республика', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'viloyat', 'score' => 10, 'checked'=>false],
                ['name_en' => 'region', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'область', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'tuman', 'score' => 5, 'checked'=>false],
                ['name_en' => 'district', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'округ', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'O‘zbekiston milliy terma jamoa a’zosini tayyorlaganligi uchun (har bir sportchi uchun):',
            'category_en' => 'For training a member of the national team of Uzbekistan (for each athlete):',
            'category_ru' => 'За подготовку члена сборной Узбекистана (за каждого спортсмена):',
            'sub_category' => json_encode([
                ['name_uz' => 'asosiy tarkib', 'score' => 15, 'checked'=>false],
                ['name_en' => 'main content', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'основное содержание', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'zaxira tarkib', 'score' => 10, 'checked'=>false],
                ['name_en' => 'backup content', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'резервное копирование содержимого', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_en' => 'The level of physical fitness according to the results of sports tests:',
            'category_ru' => 'Уровень физической подготовленности по результатам спортивных проб:',
            'sub_category' => json_encode([
                ['name_uz' => 'I o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 5, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'II o‘rin', 'score' => 4, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 4, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 4, 'checked'=>false],
                ['name_uz' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 3, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_en' => 'Organization of open training sessions and master classes:',
            'category_ru' => 'Организация открытых тренингов и мастер-классов:',
            'sub_category' => json_encode([
                ['name_uz' => 'Umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'In the organization of general secondary education', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'В организации общего среднего образования', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'Maktabgacha ta’lim tashkilotida', 'score' => 4, 'checked'=>false],
                ['name_en' => 'In the preschool education organization', 'score' => 4, 'checked'=>false],
                ['name_ru' => 'В дошкольной образовательной организации', 'score' => 4, 'checked'=>false],
                ['name_uz' => 'Professional ta’lim muassasasida', 'score' => 3, 'checked'=>false],
                ['name_en' => 'In a professional educational institution', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'В профессиональном учебном заведении', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 3,
            'category_uz' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_en' => 'Preparation of educational and methodical literature:',
            'category_ru' => 'Подготовка учебно-методической литературы:',
            'sub_category' => json_encode([
                ['name_uz' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi namunaviy o‘quv dastur, metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'implemented in the region or the republic (for each individually authored model curriculum, methodical manual, teaching-methodical recommendation, developments)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'реализуемые в области или республике (для каждого индивидуально разрабатываются типовые учебные планы, методические пособия, учебно-методические рекомендации, разработки)', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 8, 'checked'=>false],
                ['name_en' => 'implemented in the district (city) (methodical manual, teaching-methodical recommendation, developments of each individual author)', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'реализуемые в районе (городе) (методическое пособие, учебно-методические рекомендации, разработки каждого отдельного автора)', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'implemented for the institution (methodical manual, teaching-methodical recommendation, developments of each individual author)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'реализуемые для учреждения (методическое пособие, учебно-методические рекомендации, разработки каждого отдельного автора)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Jismoniy tarbiya va sport sohasidagi ma’lumoti:',
            'category_en' => 'Education in the field of physical education and sports:',
            'category_ru' => 'Образование в области физической культуры и спорта:',
            'sub_category' => json_encode([
                ['name_uz' => 'tayanch oliy', 'score' => 10, 'checked'=>false],
                ['name_en' => 'base is high', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'база высокая', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'qayta tayyorlash', 'score' => 7, 'checked'=>false],
                ['name_en' => 'retraining', 'score' => 7, 'checked'=>false],
                ['name_ru' => 'переподготовка', 'score' => 7, 'checked'=>false],
                ['name_uz' => 'o‘rta-maxsus, professional', 'score' => 5, 'checked'=>false],
                ['name_en' => 'medium-special, professional', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'средне-специальный, профессиональный', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Sport toifasi uchun:',
            'category_en' => 'For the sports category:',
            'category_ru' => 'Для спортивной категории:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifadagi sport ustasi', 'score' => 5, 'checked'=>false],
                ['name_en' => 'master of sports of international class', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'мастер спорта международного класса', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport ustasi', 'score' => 3, 'checked'=>false],
                ['name_en' => 'master of sports', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'мастер спорта', 'score' => 3, 'checked'=>false],
                ['name_uz' => 'sport ustaligiga nomzod', 'score' => 2, 'checked'=>false],
                ['name_en' => 'candidate for master of sports', 'score' => 2, 'checked'=>false],
                ['name_ru' => 'кандидат в мастера спорта', 'score' => 2, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Malaka toifasi uchun:',
            'category_en' => 'For the qualification category:',
            'category_ru' => 'Для квалификационной категории:',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'higher category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'высшая категория', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'first category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'первая категория', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'ikkinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_en' => 'second category', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'вторая категория', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Sport turi bo‘yicha hakamlik toifasi uchun:',
            'category_en' => 'For the category of refereeing by type of sport:',
            'category_ru' => 'На разряд судейства по видам спорта:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'international category', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'международная категория', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'milliy toifa', 'score' => 3, 'checked'=>false],
                ['name_en' => 'national category', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'национальная категория', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Osiyo va parosiyo o‘yinlari, jahon va Osiyo chempionatlari hamda kuboklarining sovrindorini tayyorlaganligi uchun (har bir sportchi uchun):',
            'category_en' => 'For preparing the winner of the Asian and Asian Games, World and Asian championships and cups (for each athlete):',
            'category_ru' => 'Для подготовки победителя Азиатских и Азиатских игр, чемпионатов и кубков мира и Азии (для каждого спортсмена):',
            'sub_category' => json_encode([
                ['name_uz' => '1-o‘rin', 'score' => 20, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 20, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 20, 'checked'=>false],
                ['name_uz' => '2-o‘rin', 'score' => 15, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 15, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 15, 'checked'=>false],
                ['name_uz' => '3-o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 10, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'O‘zbekiston chempionati va kubogi sovrindorini tayyorlaganligi uchun (har bir sportchi uchun):',
            'category_en' => 'For training the winner of the Uzbekistan Championship and Cup (for each athlete):',
            'category_ru' => 'Для подготовки победителя Чемпионата и Кубка Узбекистана (за каждого спортсмена):',
            'sub_category' => json_encode([
                ['name_uz' => '1-o‘rin', 'score' => 15, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 15, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 15, 'checked'=>false],
                ['name_uz' => '2-o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 10, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 10, 'checked'=>false],
                ['name_uz' => '3-o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 5, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Sport musobaqa(turnir, liga)lari g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_en' => 'For preparing the winner and prize-winner of sports competitions (tournaments, leagues):',
            'category_ru' => 'Для подготовки победителя и призера спортивных соревнований (турниров, лиг):',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 15, 'checked'=>false],
                ['name_en' => 'republic', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'республика', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'viloyat', 'score' => 10, 'checked'=>false],
                ['name_en' => 'region', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'область', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'tuman', 'score' => 5, 'checked'=>false],
                ['name_en' => 'district', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'округ', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'O‘zbekiston milliy terma jamoa a’zosini tayyorlaganligi uchun (har bir sportchi uchun):',
            'category_en' => 'For training a member of the national team of Uzbekistan (for each athlete):',
            'category_ru' => 'За подготовку члена сборной Узбекистана (за каждого спортсмена):',
            'sub_category' => json_encode([
                ['name_uz' => 'asosiy tarkib', 'score' => 15, 'checked'=>false],
                ['name_en' => 'main content', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'основное содержание', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'zaxira tarkib', 'score' => 10, 'checked'=>false],
                ['name_en' => 'backup content', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'резервное содержимого', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Jismoniy tayyorgarlik darajasi sport sinovi natijasiga ko‘ra:',
            'category_en' => 'The level of physical fitness according to the results of the sports test:',
            'category_ru' => 'Уровень физической подготовленности по результатам спортивного теста:',
            'sub_category' => json_encode([
                ['name_uz' => 'I o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => '1st place', 'score' => 5, 'checked'=>false],
                ['name_ru' => '1-е место', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'II o‘rin', 'score' => 4, 'checked'=>false],
                ['name_en' => '2nd place', 'score' => 4, 'checked'=>false],
                ['name_ru' => '2-e место', 'score' => 4, 'checked'=>false],
                ['name_uz' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_en' => '3-e место', 'score' => 3, 'checked'=>false],
                ['name_ru' => '3rd place', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 4,
            'category_uz' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_en' => 'Organization of open training sessions and master classes:',
            'category_ru' => 'Организация открытых тренингов и мастер-классов:',
            'sub_category' => json_encode([
                ['name_uz' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'in general secondary education organization', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'в общеобразовательной организации', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'maktabgacha ta’lim tashkilotida', 'score' => 4, 'checked'=>false],
                ['name_en' => 'in a preschool educational organization', 'score' => 4, 'checked'=>false],
                ['name_ru' => 'в дошкольной образовательной организации', 'score' => 4, 'checked'=>false],
                ['name_uz' => 'professional ta’lim muassasasida', 'score' => 3, 'checked'=>false],
                ['name_en' => 'in a professional educational institution', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'в профессиональном учебном заведении', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);

        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Psixologiya (sport) sohasidagi ma’lumoti:',
            'category_en' => 'Psixologiya (sport) sohasidagi ma’lumoti:',
            'category_ru' => 'Psixologiya (sport) sohasidagi ma’lumoti:',
            'sub_category' => json_encode([
                ['name_uz' => 'Oliy', 'score' => 10, 'checked'=>false],
                ['name_en' => 'Oliy', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'Oliy', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'Qayta tayyorlash', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Qayta tayyorlash', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Qayta tayyorlash', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Sport turi bo‘yicha kattalar sport razryadi:',
            'category_en' => 'Sport turi bo‘yicha kattalar sport razryadi:',
            'category_ru' => 'Sport turi bo‘yicha kattalar sport razryadi:',
            'sub_category' => json_encode([
                ['name_uz' => 'Birinchi va undan yuqori', 'score' => 10, 'checked'=>false],
                ['name_en' => 'Birinchi va undan yuqori', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'Birinchi va undan yuqori', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'Ikkinchi razryadi', 'score' => 8, 'checked'=>false],
                ['name_en' => 'Ikkinchi razryadi', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'Ikkinchi razryadi', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'Uchinchi razryadi', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Uchinchi razryadi', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Uchinchi razryadi', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_en' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_ru' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'sub_category' => json_encode([
                ['name_uz' => 'Xammualliflikdagi o‘quv qo‘llanmalar uchun', 'score' => 15, 'checked'=>false],
                ['name_en' => 'Xammualliflikdagi o‘quv qo‘llanmalar uchun', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'Xammualliflikdagi o‘quv qo‘llanmalar uchun', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'Yakka mualliflikdagi uslubiy qo‘llanma yoki uslubiy ko‘rsatma uchun', 'score' => 10, 'checked'=>false],
                ['name_en' => 'Yakka mualliflikdagi uslubiy qo‘llanma yoki uslubiy ko‘rsatma uchun', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'Yakka mualliflikdagi uslubiy qo‘llanma yoki uslubiy ko‘rsatma uchun', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'Xammualliflikdagi uslubiy ko‘rsatma yoki uslubiy tavsiya uchun', 'score' => 8, 'checked'=>false],
                ['name_en' => 'Xammualliflikdagi uslubiy ko‘rsatma yoki uslubiy tavsiya uchun', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'Xammualliflikdagi uslubiy ko‘rsatma yoki uslubiy tavsiya uchun', 'score' => 8, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Ilmiy konferensiyalarda yakka mualliflikdagi maqola va tezislar chop etish hamda ma’ruzalar bilan qatnashish:',
            'category_en' => 'Ilmiy konferensiyalarda yakka mualliflikdagi maqola va tezislar chop etish hamda ma’ruzalar bilan qatnashish:',
            'category_ru' => 'Ilmiy konferensiyalarda yakka mualliflikdagi maqola va tezislar chop etish hamda ma’ruzalar bilan qatnashish:',
            'sub_category' => json_encode([
                ['name_uz' => 'Xalqaro miqyosda', 'score' => 15, 'checked'=>false],
                ['name_en' => 'Xalqaro miqyosda', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'Xalqaro miqyosda', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'Respublika miqyosida', 'score' => 10, 'checked'=>false],
                ['name_en' => 'Respublika miqyosida', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'Respublika miqyosida', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'Viloyat miqyosida', 'score' => 8, 'checked'=>false],
                ['name_en' => 'Viloyat miqyosida', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'Viloyat miqyosida', 'score' => 8, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Sport ta’lim muassasalarida sportchilarni psixologik tayyorlashga asoslangan seminar-trening mashg‘ulotlarni o‘tkazganligi (bayonnomasi):',
            'category_en' => 'Sport ta’lim muassasalarida sportchilarni psixologik tayyorlashga asoslangan seminar-trening mashg‘ulotlarni o‘tkazganligi (bayonnomasi):',
            'category_ru' => 'Sport ta’lim muassasalarida sportchilarni psixologik tayyorlashga asoslangan seminar-trening mashg‘ulotlarni o‘tkazganligi (bayonnomasi):',
            'sub_category' => json_encode([
                ['name_uz' => 'Sport akademiyalari, olimpiya zaxiralari kolleji', 'score' => 10, 'checked'=>false],
                ['name_en' => 'Sport akademiyalari, olimpiya zaxiralari kolleji', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'Sport akademiyalari, olimpiya zaxiralari kolleji', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'Oliy mahorat sport maktabi', 'score' => 8, 'checked'=>false],
                ['name_en' => 'Oliy mahorat sport maktabi', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'Oliy mahorat sport maktabi', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'Ixtisoslashgan bolalar-o‘smirlar sport maktabi, bolalar-o‘smirlar sport maktablari', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Ixtisoslashgan bolalar-o‘smirlar sport maktabi, bolalar-o‘smirlar sport maktablari', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Ixtisoslashgan bolalar-o‘smirlar sport maktabi, bolalar-o‘smirlar sport maktablari', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Kasbiy faoliyati bo‘yicha seminar-trening kurslarida ishtirok etganligi: (sertifikat)',
            'category_en' => 'Kasbiy faoliyati bo‘yicha seminar-trening kurslarida ishtirok etganligi: (sertifikat)',
            'category_ru' => 'Kasbiy faoliyati bo‘yicha seminar-trening kurslarida ishtirok etganligi: (sertifikat)',
            'sub_category' => json_encode([
                ['name_uz' => 'Xalqaro miqyosida (onlayn)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'Xalqaro miqyosida (onlayn)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'Xalqaro miqyosida (onlayn)', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'Respublika miqyosida', 'score' => 8, 'checked'=>false],
                ['name_en' => 'Respublika miqyosida', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'Respublika miqyosida', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'Viloyat miqyosida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Viloyat miqyosida', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Viloyat miqyosida', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Sport ta’lim muassasasida psixologik xizmat ishlarini tashkil etganligi:',
            'category_en' => 'Sport ta’lim muassasasida psixologik xizmat ishlarini tashkil etganligi:',
            'category_ru' => 'Sport ta’lim muassasasida psixologik xizmat ishlarini tashkil etganligi:',
            'sub_category' => json_encode([
                ['name_uz' => '(psixologik ma’rifat va tashviqot, psixologik-pedagogik tashxis, psixologik profilaktika, psixologik korreksiya, psixologik maslahat, sport faoliyatiga yo‘naltirish)', 'score' => 15, 'checked'=>false],
                ['name_en' => '(psixologik ma’rifat va tashviqot, psixologik-pedagogik tashxis, psixologik profilaktika, psixologik korreksiya, psixologik maslahat, sport faoliyatiga yo‘naltirish)', 'score' => 15, 'checked'=>false],
                ['name_ru' => '(psixologik ma’rifat va tashviqot, psixologik-pedagogik tashxis, psixologik profilaktika, psixologik korreksiya, psixologik maslahat, sport faoliyatiga yo‘naltirish)', 'score' => 15, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Sportchining qobiliyatlarini rivojlantirish uchun individual dasturlarni tuzganligi:',
            'category_en' => 'Sportchining qobiliyatlarini rivojlantirish uchun individual dasturlarni tuzganligi:',
            'category_ru' => 'Sportchining qobiliyatlarini rivojlantirish uchun individual dasturlarni tuzganligi:',
            'sub_category' => json_encode([
                ['name_uz' => '(Aqliy va jismoniy qobiliyatlarni rivojlantirish dasturi)', 'score' => 5, 'checked'=>false],
                ['name_en' => '(Aqliy va jismoniy qobiliyatlarni rivojlantirish dasturi)', 'score' => 5, 'checked'=>false],
                ['name_ru' => '(Aqliy va jismoniy qobiliyatlarni rivojlantirish dasturi)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 5,
            'category_uz' => 'Ochiq o‘quv mashg‘ulot hamda mahorat darslarini tashkil etganligi va o‘tkazganligi:',
            'category_en' => 'Ochiq o‘quv mashg‘ulot hamda mahorat darslarini tashkil etganligi va o‘tkazganligi:',
            'category_ru' => 'Ochiq o‘quv mashg‘ulot hamda mahorat darslarini tashkil etganligi va o‘tkazganligi:',
            'sub_category' => json_encode([
                ['name_uz' => 'Oliy sport mahorat maktabi', 'score'=> 10, 'checked'=>false],
                ['name_en' => 'Oliy sport mahorat maktabi', 'score'=> 10, 'checked'=>false],
                ['name_ru' => 'Oliy sport mahorat maktabi', 'score'=> 10, 'checked'=>false],
                ['name_uz' => 'Olimpiya zaxiralari kolleji', 'score'=> 8, 'checked'=>false],
                ['name_en' => 'Olimpiya zaxiralari kolleji', 'score'=> 8, 'checked'=>false],
                ['name_ru' => 'Olimpiya zaxiralari kolleji', 'score'=> 8, 'checked'=>false],
                ['name_uz' => 'Sport turlari bo‘yicha davlat ixtisoslashtirilgan maktab-internatlari', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Sport turlari bo‘yicha davlat ixtisoslashtirilgan maktab-internatlari', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Sport turlari bo‘yicha davlat ixtisoslashtirilgan maktab-internatlari', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);

        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_en' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_ru' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'sub_category' => json_encode([
                ['name_uz' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'professional ta’lim muassasasida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'professional ta’lim muassasasida', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'professional ta’lim muassasasida', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport ta’lim muassasasida', 'score' => 5],
                ['name_en' => 'sport ta’lim muassasasida', 'score' => 5],
                ['name_ru' => 'sport ta’lim muassasasida', 'score' => 5],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Respublika va xalqaro miqyosidagi fan olimpiadalari, sport musobaqalari sovrindorlarini tayyorlaganligi uchun:',
            'category_en' => 'Respublika va xalqaro miqyosidagi fan olimpiadalari, sport musobaqalari sovrindorlarini tayyorlaganligi uchun:',
            'category_ru' => 'Respublika va xalqaro miqyosidagi fan olimpiadalari, sport musobaqalari sovrindorlarini tayyorlaganligi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro miqyosda', 'score' => 5, 'checked'=>false],
                ['name_en' => 'xalqaro miqyosda', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'xalqaro miqyosda', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'respublika miqyosida', 'score' => 3, 'checked'=>false],
                ['name_en' => 'respublika miqyosida', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'respublika miqyosida', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Ilmiy konferensiyalarda ma’ruza bilan qatnashish:',
            'category_en' => 'Ilmiy konferensiyalarda ma’ruza bilan qatnashish:',
            'category_ru' => 'Ilmiy konferensiyalarda ma’ruza bilan qatnashish:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro miqyosda', 'score' => 5, 'checked'=>false],
                ['name_en' => 'xalqaro miqyosda', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'xalqaro miqyosda', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'respublika miqyosida', 'score' => 3, 'checked'=>false],
                ['name_en' => 'respublika miqyosida', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'respublika miqyosida', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Ilmiy jurnallarda maqolalar chop etish:',
            'category_en' => 'Ilmiy jurnallarda maqolalar chop etish:',
            'category_ru' => 'Ilmiy jurnallarda maqolalar chop etish:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro ma’lumotlar bazasiga kiritilgan yuqori reytingli ilmiy jurnallar yoki “impakt-faktor”ga ega bo‘lgan ilmiy jurnallarda', 'score' => 10, 'checked'=>false],
                ['name_en' => 'xalqaro ma’lumotlar bazasiga kiritilgan yuqori reytingli ilmiy jurnallar yoki “impakt-faktor”ga ega bo‘lgan ilmiy jurnallarda', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'xalqaro ma’lumotlar bazasiga kiritilgan yuqori reytingli ilmiy jurnallar yoki “impakt-faktor”ga ega bo‘lgan ilmiy jurnallarda', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'respublika miqyosidagi jurnallarda', 'score' => 5, 'checked'=>false],
                ['name_en' => 'respublika miqyosidagi jurnallarda', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'respublika miqyosidagi jurnallarda', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Ixtiro (patent), ratsionalizatorlik takliflari, innovatsion ishlanmalarga mualliflik qilish:',
            'category_en' => 'Ixtiro (patent), ratsionalizatorlik takliflari, innovatsion ishlanmalarga mualliflik qilish:',
            'category_ru' => 'Ixtiro (patent), ratsionalizatorlik takliflari, innovatsion ishlanmalarga mualliflik qilish:',
            'sub_category' => json_encode([
                ['name_uz' => 'ixtiro (patent)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'ixtiro (patent)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'ixtiro (patent)', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'ratsionalizatorlik taklifi', 'score' => 6, 'checked'=>false],
                ['name_en' => 'ratsionalizatorlik taklifi', 'score' => 6, 'checked'=>false],
                ['name_ru' => 'ratsionalizatorlik taklifi', 'score' => 6, 'checked'=>false],
                ['name_uz' => 'innovatsion ishlanmalarga mualliflik', 'score' => 4, 'checked'=>false],
                ['name_en' => 'innovatsion ishlanmalarga mualliflik', 'score' => 4, 'checked'=>false],
                ['name_ru' => 'innovatsion ishlanmalarga mualliflik', 'score' => 4, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'O‘quv adabiyotlari (darslik, o‘quv qo‘llanma, metodik qo‘llanma) tayyorlash va nashrdan chiqarish:',
            'category_en' => 'O‘quv adabiyotlari (darslik, o‘quv qo‘llanma, metodik qo‘llanma) tayyorlash va nashrdan chiqarish:',
            'category_ru' => 'O‘quv adabiyotlari (darslik, o‘quv qo‘llanma, metodik qo‘llanma) tayyorlash va nashrdan chiqarish:',
            'sub_category' => json_encode([
                'Darslik:', ['name_uz' => 'hammulliflikda', 'score' => 15, 'checked'=>false],
                'Учебник:', ['name_ru' => 'hammulliflikda', 'score' => 15, 'checked'=>false],
                'Textbook:', ['name_en' => 'hammulliflikda', 'score' => 15, 'checked'=>false],
                'O‘quv qo‘llanma:', ['name_uz' => 'hammulliflikda', 'score' => 10, 'checked'=>false],
                'Методическое пособие:', ['name_ru' => 'hammulliflikda', 'score' => 10, 'checked'=>false],
                'Study guide:', ['name_en' => 'hammulliflikda', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Ilmiy daraja va unvoni uchun.',
            'category_en' => 'Ilmiy daraja va unvoni uchun.',
            'category_ru' => 'Ilmiy daraja va unvoni uchun.',
            'sub_category' => json_encode([
                ['name_uz' => 'Ilmiy daraja va unvoni uchun', 'score' => 15, 'checked'=>false],
                ['name_en' => 'Ilmiy daraja va unvoni uchun', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'Ilmiy daraja va unvoni uchun', 'score' => 15, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => '“Universiada” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_en' => '“Universiada” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_ru' => '“Universiada” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_en' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_ru' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_uz' => 'viloyat (shahar)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'viloyat (shahar)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'viloyat (shahar)', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'sub_category' => json_encode([
                ['name_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 6,
            'category_uz' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'category_en' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'category_ru' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'sub_category' => json_encode([
                ['name_uz' => 'sport turi — 2 ta', 'score' => 10, 'checked'=>false],
                ['name_en' => 'sport turi — 2 ta', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'sport turi — 2 ta', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'sport turi — 1 ta', 'score' => 8, 'checked'=>false],
                ['name_en' => 'sport turi — 1 ta', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'sport turi — 1 ta', 'score' => 8, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'Malaka toifasi uchun:',
            'category_en' => 'Malaka toifasi uchun:',
            'category_ru' => 'Malaka toifasi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy toifa', 'score' => 10],
                ['name_en' => 'oliy toifa', 'score' => 10],
                ['name_ru' => 'oliy toifa', 'score' => 10],
                ['name_uz' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_en' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'Sport toifasi uchun:',
            'category_en' => 'Sport toifasi uchun:',
            'category_ru' => 'Sport toifasi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_en' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_en' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_en' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_en' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalar g‘oliblarini tayyorlaganligi uchun:',
            'category_en' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalar g‘oliblarini tayyorlaganligi uchun:',
            'category_ru' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalar g‘oliblarini tayyorlaganligi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_en' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_en' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'tuman (shahar) (ko‘pi bilan 2 ta natija)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'tuman (shahar) (ko‘pi bilan 2 ta natija)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'tuman (shahar) (ko‘pi bilan 2 ta natija)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => '“Barkamol avlod” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_en' => '“Barkamol avlod” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_ru' => '“Barkamol avlod” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_en' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_en' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'tuman', 'score' => 5, 'checked'=>false],
                ['name_en' => 'tuman', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'tuman', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'sub_category' => json_encode([
                ['name_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_en' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_ru' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'sub_category' => json_encode([
                ['name_uz' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'maktabgacha ta’lim tashkilotida', 'score' => 4, 'checked'=>false],
                ['name_en' => 'maktabgacha ta’lim tashkilotida', 'score' => 4, 'checked'=>false],
                ['name_ru' => 'maktabgacha ta’lim tashkilotida', 'score' => 4, 'checked'=>false],
                ['name_uz' => 'professional ta’lim muassasasida', 'score' => 3, 'checked'=>false],
                ['name_en' => 'professional ta’lim muassasasida', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'professional ta’lim muassasasida', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'category_en' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'category_ru' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'sub_category' => json_encode([
                ['name_uz' => 'sport turi — 2 ta', 'score' => 5, 'checked'=>false],
                ['name_en' => 'sport turi — 2 ta', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'sport turi — 2 ta', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport turi — 1 ta', 'score' => 3, 'checked'=>false],
                ['name_en' => 'sport turi — 1 ta', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'sport turi — 1 ta', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_en' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_ru' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'sub_category' => json_encode([
                ['name_uz' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_en' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'III o‘rin', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 7,
            'category_uz' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_en' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_ru' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'sub_category' => json_encode([
                ['name_uz' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 15, 'checked'=>false],
                ['name_en' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);

        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Malaka toifasi uchun:',
            'category_en' => 'Malaka toifasi uchun:',
            'category_ru' => 'Malaka toifasi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy toifa', 'score' => 10, 'checked'=>false],
                ['name_en' => 'oliy toifa', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'oliy toifa', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_en' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Sport toifasi uchun:',
            'category_en' => 'Sport toifasi uchun:',
            'category_ru' => 'Sport toifasi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_en' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_en' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_en' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_en' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalar g‘oliblarini tayyorlaganligi uchun:',
            'category_en' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalar g‘oliblarini tayyorlaganligi uchun:',
            'category_ru' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalar g‘oliblarini tayyorlaganligi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_en' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'respublika', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_en' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'viloyat', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'tuman (shahar) (ko‘pi bilan 2 ta natija)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'tuman (shahar) (ko‘pi bilan 2 ta natija)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'tuman (shahar) (ko‘pi bilan 2 ta natija)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => '“Umid nihollari” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_en' => '“Umid nihollari” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'category_ru' => '“Umid nihollari” sport musobaqasi g‘olib hamda sovrindorini tayyorlaganligi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_en' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'tuman', 'score' => 10, 'checked'=>false],
                ['name_en' => 'tuman', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'tuman', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Jismoniy tarbiya fan olimpiadasining g‘olib va sovrindorlarini tayyorlaganligi uchun:',
            'category_en' => 'Jismoniy tarbiya fan olimpiadasining g‘olib va sovrindorlarini tayyorlaganligi uchun:',
            'category_ru' => 'Jismoniy tarbiya fan olimpiadasining g‘olib va sovrindorlarini tayyorlaganligi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_en' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_ru' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_uz' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_en' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'tuman', 'score' => 10, 'checked'=>false],
                ['name_en' => 'tuman', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'tuman', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'sub_category' => json_encode([
                ['name_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_en' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_ru' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'sub_category' =>json_encode([
                ['name_uz' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport ta’lim muassasasida', 'score' => 4, 'checked'=>false],
                ['name_en' => 'sport ta’lim muassasasida', 'score' => 4, 'checked'=>false],
                ['name_ru' => 'sport ta’lim muassasasida', 'score' => 4, 'checked'=>false],
                ['name_uz' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 3, 'checked'=>false],
                ['name_en' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'umumiy o‘rta ta’lim tashkilotida', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'category_en' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'category_ru' => 'Darsdan tashqari sport turlari bo‘yicha to‘garaklar soni:',
            'sub_category' => json_encode([
                ['name_uz' => 'sport turi — 2 ta', 'score' => 5, 'checked'=>false],
                ['name_en' => 'sport turi — 2 ta', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'sport turi — 2 ta', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'sport turi — 1 ta', 'score' => 3, 'checked'=>false],
                ['name_en' => 'sport turi — 1 ta', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'sport turi — 1 ta', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_en' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_ru' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'sub_category' => json_encode([
                ['name_uz' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_en' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'III o‘rin', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 8,
            'category_uz' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_en' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_ru' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'sub_category' => json_encode([
                ['name_uz' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 8, 'checked'=>false],
                ['name_en' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Jismoniy tarbiya va sport sohasidagi ma’lumoti:',
            'category_en' => 'Jismoniy tarbiya va sport sohasidagi ma’lumoti:',
            'category_ru' => 'Jismoniy tarbiya va sport sohasidagi ma’lumoti:',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy', 'score' => 10, 'checked'=>false],
                ['name_en' => 'oliy', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'oliy', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'qayta tayyorlash', 'score' => 5, 'checked'=>false],
                ['name_en' => 'qayta tayyorlash', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'qayta tayyorlash', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'o‘rta maxsus', 'score' => 3, 'checked'=>false],
                ['name_en' => 'o‘rta maxsus', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'o‘rta maxsus', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Malaka toifasi uchun:',
            'category_en' => 'Malaka toifasi uchun:',
            'category_ru' => 'Malaka toifasi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'oliy toifa', 'score' => 10, 'checked'=>false],
                ['name_en' => 'oliy toifa', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'oliy toifa', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_en' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'birinchi toifa', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_en' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'ikkinchi toifa', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Sport toifasi uchun:',
            'category_en' => 'Sport toifasi uchun:',
            'category_ru' => 'Sport toifasi uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_en' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'xalqaro toifadagi sport ustasi', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_en' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'sport ustasi', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_en' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'sport ustaligiga nomzod', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_en' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'birinchi toifa', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalarda erishgan yutuqlari uchun:',
            'category_en' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalarda erishgan yutuqlari uchun:',
            'category_ru' => 'Jismoniy tarbiya va sport bo‘yicha turli ko‘rik-tanlov va musobaqalarda erishgan yutuqlari uchun:',
            'sub_category' => json_encode([
                ['name_uz' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_en' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_ru' => 'respublika', 'score' => 20, 'checked'=>false],
                ['name_uz' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_en' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_ru' => 'viloyat', 'score' => 15, 'checked'=>false],
                ['name_uz' => 'tuman', 'score' => 10, 'checked'=>false],
                ['name_en' => 'tuman', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'tuman', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'category_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)',
            'sub_category' => json_encode([
                ['name_uz' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'Trenerlik yoki trener-instruktorlik faoliyat(lari)i bilan shug‘ullanayotganligi uchun (malaka oshirish davriga muvofiq)', 'score' => 10, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_en' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'category_ru' => 'Ochiq o‘quv mashg‘ulotlari va mahorat darslarini tashkil etish:',
            'sub_category' => json_encode([
                ['name_uz' => 'sport ta’lim muassasasida', 'score' => 10, 'checked'=>false ],
                ['name_en' => 'sport ta’lim muassasasida', 'score' => 10, 'checked'=>false ],
                ['name_ru' => 'sport ta’lim muassasasida', 'score' => 10, 'checked'=>false ],
                ['name_uz' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_en' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'maktabgacha ta’lim tashkilotida', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Sport turlari bo‘yicha to‘garaklar tashkil etganligi:',
            'category_en' => 'Sport turlari bo‘yicha to‘garaklar tashkil etganligi:',
            'category_ru' => 'Sport turlari bo‘yicha to‘garaklar tashkil etganligi:',
            'sub_category' => json_encode([
                ['name_uz' => 'sport turi — 2 ta', 'score' => 10, 'checked'=>false],
                ['name_en' => 'sport turi — 2 ta', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'sport turi — 2 ta', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'sport turi — 1 ta', 'score' => 5, 'checked'=>false],
                ['name_en' => 'sport turi — 1 ta', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'sport turi — 1 ta', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_en' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'category_ru' => 'Jismoniy tayyorgarlik darajasi sport sinovlari natijasiga ko‘ra:',
            'sub_category' => json_encode([
                ['name_uz' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_en' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'I o‘rin', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_en' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'II o‘rin', 'score' => 5, 'checked'=>false],
                ['name_uz' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_en' => 'III o‘rin', 'score' => 3, 'checked'=>false],
                ['name_ru' => 'III o‘rin', 'score' => 3, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
        DB::table('direction_categories')->insert([
            'direction_id' => 9,
            'category_uz' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_en' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'category_ru' => 'O‘quv-uslubiy adabiyotlar tayyorlaganligi:',
            'sub_category' => json_encode([
                ['name_uz' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_en' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_ru' => 'viloyat yoki respublikada tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 10, 'checked'=>false],
                ['name_uz' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 8, 'checked'=>false],
                ['name_en' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 8, 'checked'=>false],
                ['name_ru' => 'tuman (shahar)da tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 8, 'checked'=>false],
                ['name_uz' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
                ['name_en' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
                ['name_ru' => 'muassasa uchun tatbiq etilgan (har bir yakka mualliflikdagi metodik qo‘llanma, o‘quv-uslubiy tavsiya, ishlanmalar uchun)', 'score' => 5, 'checked'=>false],
            ]),
            'pdf'=>null
        ]);
    }
}
