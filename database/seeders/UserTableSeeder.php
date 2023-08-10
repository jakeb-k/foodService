<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class UserTableSeeder extends Seeder
{
    /*
    *
     * Run the database seeds.
     *
     * @return void
     **/
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Bob',
            'email'=>'b@b.com',
            'address'=> '56 B Avenue',
            'role'=>1,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Subway',
            'email'=>'subway@subs.com',
            'address'=> '123 S Street',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Jakeb ',
            'email'=>'j@j.com',
            'address'=> '87 J Crescent',
            'role'=>1,
            'favs'=>'4,5,11',
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'McDonalds',
            'email'=>'m@m.com',
            'address'=> '324 M Street',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Kahani Indian',
            'email'=>'k@i.com',
            'address'=> '2 K Way',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'KFC',
            'email'=>'k@c.com',
            'address'=> '87 C Boulevard',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Zambreros',
            'email'=>'z@z.com',
            'address'=> '2/1093 Z Highway',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Throwers Fish and Chips',
            'email'=>'t@c.com',
            'address'=> '93 T Avenue',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Noodle Box',
            'email'=>'n@b.com',
            'address'=> '43 N Street',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Golden Pine Chinese',
            'email'=>'g@c.com',
            'address'=> '89 G Way',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Sushi Train',
            'email'=>'s@t.com',
            'address'=> '65 S Place',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Dominos Pizza',
            'email'=>'d@p.com',
            'address'=> '28 D Court',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Balboa Italian',
            'email'=>'b@i.com',
            'address'=> '20 B Avenue',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'MUKBANG888',
            'email'=>'m@g.com',
            'address'=> '84 M Street',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Doko Demo V',
            'email'=>'d@v.com',
            'address'=> '59 D Avenue',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'The Yiros Shop',
            'email'=>'t@s.com',
            'address'=> '7 Yi Way',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Palm Beach Surf Club',
            'email'=>'p@c.com',
            'address'=> '2193 P Highway',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>"Captain Hook's Seafood",
            'email'=>'c@s.com',
            'address'=> '5 C Crescent',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name'=>'Chef House Thai',
            'email'=>'c@h.com',
            'address'=> '30 Tai Place',
            'role'=>2,
            'password'=>bcrypt('123456')
        ]);
    }
}
