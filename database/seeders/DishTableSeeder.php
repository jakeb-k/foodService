<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            'name' => 'Cheeseburger Meal',
            'description'=> 'A juicy cheeseburger meal with fries and a drink',
            'price' => 7.95,
            'promotion'=> 0.0,
            'restaurant_id'=> 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('dishes')->insert([
            'name' => 'Spicy Chicken Burger Meal',
            'description'=> 'A tender spicy chicken burger meal with fries and a drink',
            'price' => 8.75,
            'promotion'=> 0.2,
            'restaurant_id'=> 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Nugget Meal',
            'description'=> '10pc of crispy nuggets with choice of 3 sauces, comes with fries and drink',
            'price' => 10.95,
            'promotion'=> 0.0,
            'restaurant_id'=> 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Schnitzel Sub',
            'description'=> 'Chicken Schnitzel Sub, with lettuce, tomato and garlic aioli',
            'price' => 8.50,
            'promotion'=> 0.0,
            'image'=>'1689065503.jpg',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,chicken,schinitzel,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Meatball Sub',
            'description'=> 'Classic meatball sub, with cheddar cheese',
            'price' => 7.0,
            'promotion'=> 0.15,
            'image'=>'1689065472.png',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,beef,meatballs,meatball,marinara,cheesy,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Veggie Sub',
            'description'=> 'Sub packed with crisp fresh veggies',
            'price' => 7.95,
            'promotion'=> 0.0,
            'image'=>'1689068501.png',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,veggies,vegetables,vegan,avocado,vegetarian,salad,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Butter Chicken',
            'description'=> 'Classic butter chicken, served with naan bread',
            'price' => 12.95,
            'promotion'=> 0.0,
            'restaurant_id'=> 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Pani Puri',
            'description'=> 'Indian street food staple',
            'price' => 7.95,
            'promotion'=> 0.0,
            'restaurant_id'=> 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Samosas',
            'description'=> '8pc of Samosas, served with special in-house sauce',
            'price' => 11.50,
            'promotion'=> 0.05,
            'restaurant_id'=> 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Pulled Pork Sub',
            'description'=> 'juicy, moist pulled pork, with a crispy, fresh slaw to go with',
            'price' => 9,
            'promotion'=> 0,
            'image'=>'1689068244.png',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,pulled pork,pork,slow-cooked,slow cooked,bbq,coleslaw,slaw,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'B.L.T',
            'description'=> 'A combo as old as time itself, you know what it is',
            'price' => 7,
            'promotion'=> 0,
            'image'=>'1689068253.png',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,bacon,lettuce,tomato,blt,b.l.t,B.L.T,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Chicken Classic Sub',
            'description'=> 'Classic chicken sub, served with our subway salad mix thats been going hard for 50 years',
            'price' => 8,
            'promotion'=> 0,
            'image'=>'1689068370.png',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,pulled chicken,chicken,shredded chicken,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Tuna Melt',
            'description'=> 'Chunky tuna pieces, with melted cheese of your choice! Try with our delicious mayo.',
            'price' => 7.50,
            'promotion'=> 0,
            'image'=>'1689068903.png',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,tuna,seafood,tuna melt,cheesy,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Smashed Falafel',
            'description'=> 'A popular meat-free option - delicious falafel made with chickpeas, herbs and spices. Try it with garlic aioli.',
            'price' => 6.50,
            'promotion'=> 0,
            'image'=>'1689068833.png',
            'restaurant_id'=> 2,
            'tags' => 'sub,subs,halal,falafel,vegetarian,vegan,middle,eastern,mediterranean,sandwich,subway,healthy',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Seafood Sensation',
            'description'=> 'A seafood lovers delight! With our delicious seafood chunks and creamy mayo.',
            'price' => 7.50,
            'promotion'=> 0,
            'image'=>'1689069755.png',
            'tags' => 'sub,subs,imitation,crab,seafood,sandwich,subway,healthy',
            'restaurant_id'=> 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('dishes')->insert([
            'name' => 'Turkey',
            'description'=> 'Premium turkey breast sliced, try with our delicious mayo',
            'price' => 10,
            'promotion'=> 0,
            'image'=>'1689068967.png',
            'tags' => 'sub,subs,turkey,sliced meat,deli,meat,sandwich,subway,healthy',
            'restaurant_id'=> 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        
    }
}
