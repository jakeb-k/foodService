<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name'=>'McDonalds',
            'location'=>'Palm Beach',
            'times' => '5am - 12pm',
            'image' => 'images/phBg.png',
            'rating' => 3.7,
            'priceLv' => 1,
            'cuisine' => 'American',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Subway',
            'location'=>'Elanora',
            'times' => '9am - 10pm',
            'image' => 'images/subBg.png',
            'rating' => 4.2,
            'priceLv' => 1,
            'cuisine' => 'Healthy',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Kahani Indian',
            'location'=>'Tugun',
            'times' => '4pm - 9pm',
            'image' => 'images/indianBg.png',
            'rating' => 5.0,
            'priceLv' => 3,
            'cuisine' => 'Indian',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'KFC',
            'location'=>'Elanora',
            'times' => '11am - 10pm',
            'image' => 'images/kfcBg.png',
            'rating' => 3.9,
            'priceLv' => 1,
            'cuisine' => 'Fried Chicken',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Zambreros',
            'location'=>'Tugun',
            'times' => '10am - 8pm',
            'image' => 'images/zambBg.png',
            'rating' => 4.5,
            'priceLv' => 1,
            'cuisine' => 'Mexican',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Throwers Fish and Chips',
            'location'=>'Palm Beach',
            'times' => '11am - 7pm',
            'image' => 'images/fncBg.png',
            'rating' => 4.6,
            'priceLv' => 1,
            'cuisine' => 'Fish and Chips',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Noodle Box',
            'location'=>'Palm Beach',
            'times' => '11am - 9pm',
            'image' => 'images/noodles1.jpg',
            'rating' => 3.3,
            'priceLv' => 1,
            'cuisine' => 'Noodles',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Golden Pine Chinese',
            'location'=>'Palm Beach',
            'times' => '4:30pm - 9:30pm',
            'image' => 'images/chinese1.jpg',
            'rating' => 4.6,
            'priceLv' => 2,
            'cuisine' => 'Chinese',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Sushi Train',
            'location'=>'Elanora',
            'times' => '11:30am - 8pm',
            'image' => 'images/sushi1.jpg',
            'rating' => 4.3,
            'priceLv' => 1,
            'cuisine' => 'Sushi',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Dominoes Pizza',
            'location'=>'Palm Beach',
            'times' => '11am - 1am',
            'image' => 'images/pizza1.jpg',
            'rating' => 4.6,
            'priceLv' => 1,
            'cuisine' => 'Seafood',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Balboa Italian',
            'location'=>'Palm Beach',
            'times' => '5:30pm - 9:30pm',
            'image' => 'images/italian1.jpg',
            'rating' => 4.6,
            'priceLv' => 3,
            'cuisine' => 'Seafood',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'MUKBANG888',
            'location'=>'Varsity Lakes',
            'times' => '4:30pm - 10pm',
            'image' => 'images/korean1.jpg',
            'rating' => 4.4,
            'priceLv' => 2,
            'cuisine' => 'Korean',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Doko Demo V',
            'location'=>'Burleigh Heads',
            'times' => '5pm - 9pm',
            'image' => 'images/vegan1.jpg',
            'rating' => 4.9,
            'priceLv' => 2,
            'cuisine' => 'Vegan',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'The Yiros Shop',
            'location'=>'Burleigh Heads',
            'times' => '9am - 11pm',
            'image' => 'images/greek1.jpg',
            'rating' => 4.2,
            'priceLv' => 2,
            'cuisine' => 'Greek',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Palm Beach Surf Club',
            'location'=>'Palm Beach',
            'times' => '10am - 11pm',
            'image' => 'images/pub1.jpg',
            'rating' => 4.4,
            'priceLv' => 2,
            'cuisine' => 'Pub',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>"Captain Hook's Seafood",
            'location'=>'Tugun',
            'times' => '9:30am - 7:30pm',
            'image' => 'images/seafood1.jpg',
            'rating' => 3.9,
            'priceLv' => 2,
            'cuisine' => 'Seafood',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Flavours on Charcoal',
            'location'=>'Burleigh Waters',
            'times' => '10am - 7:30pm',
            'image' => 'images/bbq1.jpg',
            'rating' => 4.7,
            'priceLv' => 1,
            'cuisine' => 'BBQ',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name'=>'Chef House Thai',
            'location'=>'Palm Beach',
            'times' => '4:30pm - 9pm',
            'image' => 'images/thai1.jpg',
            'rating' => 4.5,
            'priceLv' => 2,
            'cuisine' => 'Thai',
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
