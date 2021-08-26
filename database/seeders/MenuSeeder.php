<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  \DB::table('menu')->truncate();
       \DB::table('menu')->insert([
           ['title'=>'barszcz', 
            'description'=>'Barszcz ukrainski na bazie buraków, podawany z bułeczkami czosnkowymi',
            'price'=>15.0,
            'group'=>'soup' ],
            ['title'=>'Żurek', 
            'description'=>'Zupa przyrządzana na bazie mięsnego wywaru zagęszczanego zakwasem chlebowym, z mąki żytniej mająca charakterystyczny kwaśny smaki',
            'price'=>14.5,
            'group'=>'soup' ],
            ['title'=>'Flaki', 
            'description'=>'Tradycyjna potrawa mięsna w formie gęstej zupy',
            'price'=>13.9,
            'group'=>'soup' ],
            ['title'=>'Kotlet schabowy', 
            'description'=>'Kotlet panierowany ze schabu przypominający sznycel wiedeński',
            'price'=>18,
            'group'=>'mainDish' ],
            ['title'=>'Gulasz', 
            'description'=>'Węgierskie danie narodowe, które składa się z mięsa, cebuli i papryki',
            'price'=>17,
            'group'=>'mainDish' ],
            ['title'=>'Placki ziemniaczane', 
            'description'=>'Placki smażone na tłuszczu',
            'price'=>13.5,
            'group'=>'mainDish' ],
            ['title'=>'Bigos', 
            'description'=>'Tradycyjna dla kuchni polskiej, litewskiej i białoruskiej potrawa z kapusty i mięsa',
            'price'=>16.5,
            'group'=>'mainDish' ],
            ['title'=>'Gołąbki', 
            'description'=>'Potrawa półmięsna z farszu zawiniętego w rolki z liści białej kapusty głowiastej.',
            'price'=>17.0,
            'group'=>'mainDish' ],
            ['title'=>'Pierogi', 
            'description'=>'Kawałki cienkiego, elastycznego i dobrze zlepiającego się ciasta napełnione najrozmaitszymi farszami i ugotowane w wodzie lub na parze, upieczone, usmażone czy grillowane',
            'price'=>16.0,
            'group'=>'mainDish' ],
            ['title'=>'Cezar', 
            'description'=>'Sałata rzymska, grzanki i parmezan',
            'price'=>12.0,
            'group'=>'salad' ],
            ['title'=>'Z kurczaka', 
            'description'=>'Kurczak grilowany, majonez, jajko na twardo, seler, cebulę, pieprz, pikle i różne musztardy',
            'price'=>13.5,
            'group'=>'salad' ],
            ['title'=>'Grecka', 
            'description'=>'grubo pokrojone pomidory i ogórki, czerwoną cebulę w krążkach (talarkach), oliwę, ser feta, oliwki',
            'price'=>12.5,
            'group'=>'salad'],
            ['title'=>'Ciasto czekoladowe', 
            'description'=>'Ciasto o smaku rozpuszczonej czekolady',
            'price'=>15,
            'group'=>'dessert'],
            ['title'=>'Szarlotka', 
            'description'=>'Placki z nadzieniem z kwaśnych jabłek, znajdującym się między dwoma warstwami ciasta kruchego ',
            'price'=>16.4,
            'group'=>'dessert'],
            ['title'=>'Beza', 
            'description'=>'słodki wyrób cukierniczy wykonany z masy z białek jaj kurzych i cukru pudru',
            'price'=>13.5,
            'group'=>'dessert'],
            ['title'=>'Rolada biszkoptowa', 
            'description'=>'W ciasto zawinięte jest nadzienie w postaci kremu do tortów, galaretki, lodów lub owoców',
            'price'=>13.5,
            'group'=>'dessert'],
       ]);
    }
}
