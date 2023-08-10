<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('orders')->insert([
            'total' => 18.20,
            'dishes'=> 'Meatball Sub,2,B.L.T,1',
            'user_id'=> 3, 
            'restaurant_id'=> 2,
            'sent'=> false, 
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('orders')->insert([
            'total' => 26.5,
            'dishes'=> 'Pulled Pork Sub,3,Schnitzel Sub,1',
            'user_id'=> 1, 
            'restaurant_id'=> 2,
            'sent'=> false, 
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('orders')->insert([
            'total' => 22.4,
            'dishes'=> 'Veggie Sub,2,Smashed Falafel,1',
            'user_id'=> 3, 
            'restaurant_id'=> 2,
            'sent'=> false, 
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('orders')->insert([
            'total' => 59.9,
            'dishes'=> 'Meatball Sub,10',
            'user_id'=> 1, 
            'restaurant_id'=> 2,
            'sent'=> false, 
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('orders')->insert([
            'total' => 46.35,
            'dishes'=> 'Seafood Sensation,1,Tuna Melt,2,Veggie Sub,3',
            'user_id'=> 3, 
            'restaurant_id'=> 2,
            'sent'=> false, 
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('orders')->insert([
            'total' => 34.80,
            'dishes'=> 'Samosas,2,Butter Chicken,1',
            'user_id'=> 3, 
            'restaurant_id'=> 3,
            'sent'=> false, 
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
    }
}
