<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders_statuses')->truncate();
        \DB::table('orders_statuses')->insert([ 
           ['name'=>'nowe'],
           ['name'=>'płatność rozpoczęta'],
           ['name'=>'opłacono'],
           ['name'=>'zrealizowane']
       ]);

       \DB::table('orders_payments')->truncate();
        \DB::table('orders_payments')->insert([ 
           ['name'=>'płatność przy odbiorze'],
           ['name'=>'karta']
       ]);
    }
}
