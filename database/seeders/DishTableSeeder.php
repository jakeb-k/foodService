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
        DB::table('dishes')->insert(['name'=>'﻿Big Mac Meal','description'=>'It starts with two 100% Aussie beef patties. Then comes the delicious combination of crisp iceberg lettuce, melting signature cheese, onions and pickles, between a toasted sesame seed bun. And dont forget the McDonalds special sauce!','price'=>'10.45','promotion'=>'0','restaurant_id'=>'1','tags'=>'burger, mcdonalds, beef, fast food,american']);
DB::table('dishes')->insert(['name'=>'Filet-O-Fish Meal','description'=>'Dive in and enjoy our Filet-O-Fish. Sourced for its succulent and fresh flavour, we cook tender portions of fish and enhance their great taste with zesty tartar sauce and cheese.','price'=>'8.95','promotion'=>'0','restaurant_id'=>'1','tags'=>'burger,mcdonalds,fish,fast food,american']);
DB::table('dishes')->insert(['name'=>'McChicken','description'=>'Its the simple things that matter. Like our quality chicken breast, cooked in a seasoned tempura coating. Topped with fresh, Australian-grown lettuce and our exceptional McChicken sauce, between a sesame seed bun, its hard to beat a classic.','price'=>'7.95','promotion'=>'0','restaurant_id'=>'1','tags'=>'burger,mcdonalds, chicken, fast food,american']);
DB::table('dishes')->insert(['name'=>'BBQ Angus Meal','description'=>'100% Aussie Angus juicy beef patty, Aussie Jack cheese, bacon, grilled onion, BBQ sauce and McChicken® sauce - served on a gourmet bun.','price'=>'10.95','promotion'=>'0','restaurant_id'=>'1','tags'=>'burger,bbq,angus,mcdonalds,fast food,beef,american']);
DB::table('dishes')->insert(['name'=>'Caesar McChicken Wrap','description'=>'A classic combination of lettuce, tomato and garlic mayo to complement our juicy 100% Aussie RSPCA Approved chicken breast inside a delicious wholemeal tortilla.','price'=>'10.95','promotion'=>'0','restaurant_id'=>'1','tags'=>'caesar,chicken,wrap,mcdonalds,fast food,american']);
DB::table('dishes')->insert(['name'=>'Chicken n Cheese','description'=>'A delicious combination of crispy coated chicken, cheese and mayonnaise.','price'=>'8.95','promotion'=>'0','restaurant_id'=>'1','tags'=>'burger,mcdonalds,chicken,fast food,american']);
DB::table('dishes')->insert(['name'=>'Manchow Soup','description'=>'Indo Chinese style soup with fried noodles','price'=>'8.99','promotion'=>'0','restaurant_id'=>'3','tags'=>'chinese,indian,soup,manchow']);
DB::table('dishes')->insert(['name'=>'Chicken Chettinadu','description'=>'A spice chicken, and is also gluten free!','price'=>'24.99','promotion'=>'0','restaurant_id'=>'3','tags'=>'indian,chicken,gluten free,chettinadu']);
DB::table('dishes')->insert(['name'=>'Bhuna Lamb','description'=>'Pieces of lamb cooked in onion, tomato gravy flavoured with coriander, ginger tossed with cubes of onion and capsicum','price'=>'24.99','promotion'=>'0','restaurant_id'=>'3','tags'=>'indian,lamb,curry']);
DB::table('dishes')->insert(['name'=>'Bengal Fish Curry','description'=>'Chunks of fish, cooked in tomato gravy, flavoured with mustard seeds and curry leaves','price'=>'25.99','promotion'=>'0','restaurant_id'=>'3','tags'=>'indian,fish,curry']);
DB::table('dishes')->insert(['name'=>'Chicken Vindaloo','description'=>'Chicken curry cooked with vindaloo sauce','price'=>'24.99','promotion'=>'0','restaurant_id'=>'3','tags'=>'chicken,indian,curry']);
DB::table('dishes')->insert(['name'=>'Lentil Lamb','description'=>'Combination of Bengal gram and lamb flavoured with mint powder','price'=>'25.99','promotion'=>'0','restaurant_id'=>'3','tags'=>'lentil,lamb,curry,indian']);
DB::table('dishes')->insert(['name'=>'Mixed Feast','description'=>'Mixed Feast, it’s easy as. Loaded with 4 pieces of Original Recipe Chicken, 6 Original Tenders, 6 Nuggets, 2 Large Chips and 3 Dipping Sauces – everyone’s a winner. This offer is not everywhere and not forever.','price'=>'31.95','promotion'=>'0','restaurant_id'=>'4','tags'=>'fast food,fried chicken,feast,family,kfc,american']);
DB::table('dishes')->insert(['name'=>'Family Feast','description'=>'Feast your eyes (and taste buds) on this – 10 pieces of Original Recipe Chicken and scrumptious KFC sides (including Chippies of course)','price'=>'41.95','promotion'=>'0','restaurant_id'=>'4','tags'=>'fast food,fried chicken,feast,family,kfc,american']);
DB::table('dishes')->insert(['name'=>'Giant Feast','description'=>'Giant Feast is everything you could want and some. 15 pieces of Original Recipe® Chicken, 18 juicy Nuggs, 3 Large Chippies and all your fave sides to share with friends and fam. Not everywhere and not forever.','price'=>'54.95','promotion'=>'0','restaurant_id'=>'4','tags'=>'fast food,fried chicken,feast,family,kfc,american']);
DB::table('dishes')->insert(['name'=>'Zinger® Burger Box','description'=>'For those who like it hot! Score a Zinger Burger, Wicked Wings and mouthwatering sides.','price'=>'16.45','promotion'=>'0','restaurant_id'=>'4','tags'=>'spicy,fried chicken,burger,kfc,fast food,american']);
DB::table('dishes')->insert(['name'=>'6 Pieces of Chicken','description'=>'6 pieces of Colonel Sanders world-famous, mouth-watering Original Recipe chicken with 11 secret herbs and spices. Made fresh and cooked in-store','price'=>'17.95','promotion'=>'0','restaurant_id'=>'4','tags'=>'fried chicken,kfc,fast food,american']);
DB::table('dishes')->insert(['name'=>'3 Piece Box','description'=>'3 pieces of Original Recipe chicken and sides that really hit the spot.','price'=>'15.95','promotion'=>'0','restaurant_id'=>'4','tags'=>'fried chicken,kfc,fast food,meal,american']);
DB::table('dishes')->insert(['name'=>'Burrito','description'=>'Filling, rice, beans, cheese, lettuce, sour cream, salsas, jalapeños & sauce. Vegan (VG) and Vegetarian (V) (excluding cauliflower) include guacamole, and a double serve of pinto beans and rice.','price'=>'17.2','promotion'=>'0','restaurant_id'=>'5','tags'=>'zambreros,mexican,burrito,healthy']);
DB::table('dishes')->insert(['name'=>'Big Burrito','description'=>'Filling, rice, beans, cheese, lettuce, sour cream, salsas, jalapeños & sauce. Vegan (VG) and Vegetarian (V) (excluding cauliflower) include guacamole, and a double serve of pinto beans and rice.','price'=>'21.2','promotion'=>'0','restaurant_id'=>'5','tags'=>'zambreros,mexican,burrito,healthy']);
DB::table('dishes')->insert(['name'=>'Bowl','description'=>'Filling, rice, beans, cheese, lettuce, sour cream, salsas, jalapeños & sauce. Vegan (VG) and Vegetarian (V) (excluding cauliflower) include guacamole, and a double serve of pinto beans and rice.','price'=>'17.2','promotion'=>'0','restaurant_id'=>'5','tags'=>'zambreros,mexican,burrito bowl,healthy']);
DB::table('dishes')->insert(['name'=>'Big Bowl','description'=>'Filling, rice, beans, cheese, lettuce, sour cream, salsas, jalapeños & sauce. Vegan (VG) and Vegetarian (V) (excluding cauliflower) include guacamole, and a double serve of pinto beans and rice.','price'=>'21.2','promotion'=>'0','restaurant_id'=>'5','tags'=>'zambreros,mexican,burrito bowl,healthy']);
DB::table('dishes')->insert(['name'=>'Nachos','description'=>'Filling, Zam spiced corn chips, cheese, sour cream, guacamole, tomato, jalapeños & sauce.','price'=>'18.7','promotion'=>'0','restaurant_id'=>'5','tags'=>'zambreros,mexican,nachos']);
DB::table('dishes')->insert(['name'=>'Quesadilla Stack','description'=>'Filling, cheese, salsas, jalapeños & sauce. Vegan (VG) and Vegetarian (V) (excluding cauliflower) include a double serve of pinto beans.','price'=>'15.5','promotion'=>'0','restaurant_id'=>'5','tags'=>'zambreros,mexican,quesadilla']);
DB::table('dishes')->insert(['name'=>'Grilled Seafood & Salad','description'=>'Fish of the Day, topped with chargrilled calamari & prawns marinated in mediterranean flavours served with a traditional salad of your choice. (Please select below from Garden, Greek or Slaw).','price'=>'21.5','promotion'=>'0','restaurant_id'=>'6','tags'=>'fish and chips,mediterranean,fish,chips,seafood']);
DB::table('dishes')->insert(['name'=>'Loaded Lobster Fries','description'=>'Chips topped with grilled Lobster, spicy mayo, aioli, cheese sauce & spring onion','price'=>'25','promotion'=>'0','restaurant_id'=>'6','tags'=>'fish,chips,seafood,lobster,loaded fries']);
DB::table('dishes')->insert(['name'=>'Fish & Chips','description'=>'Fillet of Hake, chips, lemon & tartare','price'=>'16.1','promotion'=>'0','restaurant_id'=>'6','tags'=>'fish,chips,seafood, fish and chips']);
DB::table('dishes')->insert(['name'=>'The FOF Pack','description'=>'Fillet of Hake, your choice of rice or chips & a tradition salad','price'=>'19.9','promotion'=>'0','restaurant_id'=>'6','tags'=>'fish,chips,seafood,fish and chips']);
DB::table('dishes')->insert(['name'=>'Panki Fish Burger','description'=>'Panko Crumb Fish of the Day, slaw, spicy mayo on a lightly toasted brioche bun','price'=>'15','promotion'=>'0','restaurant_id'=>'6','tags'=>'panko,fish,chips,burger,seafood,fish and chips']);
DB::table('dishes')->insert(['name'=>'FOD Bowl','description'=>'Bowls are packed with your garden favourites; broccoli, red cabbage, cucumber, edamame, corn & red pepper on brown rice with sesame dressing. With your choice of protein.','price'=>'19','promotion'=>'0','restaurant_id'=>'6','tags'=>'fish,seafood,healthy,bowl,fish and chips']);
DB::table('dishes')->insert(['name'=>'Chinese Combination','description'=>'Tender char siu pork, chicken, beef, prawns and shrimp wok-tossed with thin canton noodles, fresh bean shoots, capsicum, carrot, bok choy, sliced onion and garlic in a rich oyster sauce. ','price'=>'17.95','promotion'=>'0','restaurant_id'=>'7','tags'=>'noodles,chinese,noodle box']);
DB::table('dishes')->insert(['name'=>'Firecracker Chicken With Egg Fried Rice','description'=>'Ultra-crunchy chicken drizzled with sweet sticky sauce, served with wok-charred egg fried rice and chilli oil. ','price'=>'18.95','promotion'=>'0','restaurant_id'=>'7','tags'=>'firecracker chicken,noodles,chinese,noodle box']);
DB::table('dishes')->insert(['name'=>'Chinese Honey Soy','description'=>'Chicken or beef wok-tossed with thick hokkien noodles, fresh bean shoots, carrot, bok choy, sliced onion, garlic and cashew nuts in a honey soy sauce. ','price'=>'17.95','promotion'=>'0','restaurant_id'=>'7','tags'=>'noodles,chinese,honey soy,noodle box']);
DB::table('dishes')->insert(['name'=>'Chinese Special Fried Rice','description'=>'Shrimp, char siu pork, fresh bean shoots, egg, peas, spring onion & soy sauce finished with signature wok-charred flavour.','price'=>'17.95','promotion'=>'0','restaurant_id'=>'7','tags'=>'rice,chinese,fried rice,noodle box']);
DB::table('dishes')->insert(['name'=>'Pad Thai','description'=>'Choice of chicken or beef wok-tossed with Pad Thai rice noodles, egg, spring onion, fresh bean shoots and garlic in a mildly spicy tangy soy sauce, garnished with crushed nuts. ','price'=>'17.95','promotion'=>'0','restaurant_id'=>'7','tags'=>'thai, noodles, noodle box']);
DB::table('dishes')->insert(['name'=>'Japanese Teriyaki','description'=>'Chicken or beef wok-tossed with thick hokkien noodles, fresh bean shoots, broccoli, carrot, bok choy, capsicum, sliced onion and garlic in a ginger soy sauce. ','price'=>'17.95','promotion'=>'0','restaurant_id'=>'7','tags'=>'japanese,noodles,noodle box']);
DB::table('dishes')->insert(['name'=>'Special Fried Rice','description'=>'Signature fried rice','price'=>'15.5','promotion'=>'0','restaurant_id'=>'8','tags'=>'chinese,rice,fried rice']);
DB::table('dishes')->insert(['name'=>'Honey Chicken','description'=>'Sweet and tangy deep fried chicken','price'=>'25','promotion'=>'0','restaurant_id'=>'8','tags'=>'chinese,chicken,honey']);
DB::table('dishes')->insert(['name'=>'Sweet and Sour Pork','description'=>'Battered pork with sweet and sour sauce','price'=>'25','promotion'=>'0','restaurant_id'=>'8','tags'=>'sweet,sour,pork,chinese']);
DB::table('dishes')->insert(['name'=>'Mongolian Lamb','description'=>'Mongolian style lamb coated with delicious mongolian sauce','price'=>'29.5','promotion'=>'0','restaurant_id'=>'8','tags'=>'chinese,mongolian,lamb']);
DB::table('dishes')->insert(['name'=>'Beef and Black Bean Sauce','description'=>'Beef coated in black bean sauce','price'=>'25','promotion'=>'0','restaurant_id'=>'8','tags'=>'chinese,beef,black bean']);
DB::table('dishes')->insert(['name'=>'Dim Sums','description'=>'Four per serve. Pork','price'=>'9.9','promotion'=>'0','restaurant_id'=>'8','tags'=>'chinese,snack']);
DB::table('dishes')->insert(['name'=>'Karage Rice Bowl','description'=>'Deep Fried Chicken Rice Bowl (Chopstick 1pc)','price'=>'20.3','promotion'=>'0','restaurant_id'=>'9','tags'=>'japanese,chicken,fried chicken,karage,bowl,rice']);
DB::table('dishes')->insert(['name'=>'Chicken & Avocado Roll 8 pcs','description'=>'Chicken and avocado sushi rolls','price'=>'10.3','promotion'=>'0','restaurant_id'=>'9','tags'=>'sushi,chicken,avocado,roll,japanese']);
DB::table('dishes')->insert(['name'=>'Chicken & Avocado Nigiri 4pcs','description'=>'Classic chicken and avocado combination served as nigiri','price'=>'11.7','promotion'=>'0','restaurant_id'=>'9','tags'=>'japanese,sushi,chicken,avocado,nigiri']);
DB::table('dishes')->insert(['name'=>'Aburi Salmon Nigiri 4pcs','description'=>'Aburi styled salmon served as nigiri','price'=>'12.7','promotion'=>'0','restaurant_id'=>'9','tags'=>'japanese,sushi,salmon,aburi,nigiri']);
DB::table('dishes')->insert(['name'=>'Chicken Lovers','description'=>'Chicken & Avocado Nigiri 2pcs, Chicken & Avocado Roll 6pcs, Teriyaki Chicken & Avocado Roll 6pcs, (Soy Sauce 1pc, Wasabi 1pc, Ginger 1pc, Chopstick 1pc)','price'=>'20.3','promotion'=>'0','restaurant_id'=>'9','tags'=>'chicken,sushi,japanese,avocado,meal']);
DB::table('dishes')->insert(['name'=>'Salmon Lovers','description'=>'Salmon Nigiri 2pcs, Samon Onion Nigiri 2pcs, Aburi Salmon Nigiri 2pcs, Salmon & Avocado Roll 6pcs, (Soy Sauce 1pc, Wasabi 1pc, Ginger 1pc, Chopstick 1pc)','price'=>'23.5','promotion'=>'0','restaurant_id'=>'9','tags'=>'salmon,sashimi,meal,sushi,japanese']);
DB::table('dishes')->insert(['name'=>'Pepperoni Lovers','description'=>'A Dominos classic. Slices of crispy pepperoni & creamy mozzarella','price'=>'17','promotion'=>'0','restaurant_id'=>'10','tags'=>'pizza,pepperoni,fast food']);
DB::table('dishes')->insert(['name'=>'BBQ Meatlovers','description'=>'Crispy rasher bacon, pepperoni pieces, seasoned ground beef, smokey leg ham & Italian sausage, all on a BBQ sauce base','price'=>'21.4','promotion'=>'0','restaurant_id'=>'10','tags'=>'pizza,bbq,meatlovers,fast food']);
DB::table('dishes')->insert(['name'=>'Simply Cheese','description'=>'Simply topped with lots of melted mozzarella goodness','price'=>'17','promotion'=>'0','restaurant_id'=>'10','tags'=>'pizza,cheese,fast food']);
DB::table('dishes')->insert(['name'=>'Supreme','description'=>'Crispy rasher bacon, pepperoni & Italian sausage, topped with mushrooms, capsicum, crumbled beef & juicy pineapple, finished with vibrant spring onions & oregano','price'=>'21.6','promotion'=>'0','restaurant_id'=>'10','tags'=>'pizza,supreme,loaded,fast food']);
DB::table('dishes')->insert(['name'=>'Hawaiian','description'=>'A classic pairing of smokey leg ham & sweet pineapple pieces','price'=>'21','promotion'=>'0','restaurant_id'=>'10','tags'=>'pineapple,pizza,fast food']);
DB::table('dishes')->insert(['name'=>'BBQ Chicken and Bacon','description'=>'The perfect combination of succulent chicken pieces, crispy rasher bacon & slices of red onion on a BBQ sauce base','price'=>'24.1','promotion'=>'0','restaurant_id'=>'10','tags'=>'pizza,bbq,chicken,bacon,fast food']);
DB::table('dishes')->insert(['name'=>'Calamari Fritti','description'=>'With parmesan, shallots, chilli, garlic aioli and lemon.','price'=>'19','promotion'=>'0','restaurant_id'=>'11','tags'=>'italian,seafood,calamari']);
DB::table('dishes')->insert(['name'=>'Bruschetta','description'=>'Grilled sourdough rubbed with garlic and topped with olive oil and salt. ','price'=>'19','promotion'=>'0','restaurant_id'=>'11','tags'=>'italian,bread,appetizer,']);
DB::table('dishes')->insert(['name'=>'Chilli Prawns Pizza','description'=>'Thirteen inches. Tomato base, mozzarella, prawns, chilli, coriander, shallots, garlic and lime. Come with tomato sauce base and mozzarella.','price'=>'27','promotion'=>'0','restaurant_id'=>'11','tags'=>'italian,pizza,chilli,prawns']);
DB::table('dishes')->insert(['name'=>'Mi Amore Pizza','description'=>'Mozzarella, mushroom, pork and fennel sausage with truffle oil and rosemary . White base pizza. No tomato base.','price'=>'26','promotion'=>'0','restaurant_id'=>'11','tags'=>'pizza,bianco,white base,italian']);
DB::table('dishes')->insert(['name'=>'Lamb Ragu','description'=>'12 hour slow cooked lamb ragu w/pappardelle pasta and parmesan','price'=>'28','promotion'=>'0','restaurant_id'=>'11','tags'=>'italian,ragu,pasta,lamb']);
DB::table('dishes')->insert(['name'=>'Napolitana Pasta','description'=>'Spaghetti, Napolitana sauce with basil and parmesan','price'=>'22','promotion'=>'0','restaurant_id'=>'11','tags'=>'italian,pasta,spaghetti']);
DB::table('dishes')->insert(['name'=>'Seafood Pancake','description'=>' ','price'=>'27.5','promotion'=>'0','restaurant_id'=>'12','tags'=>'seafood,korean,pancake']);
DB::table('dishes')->insert(['name'=>'Bibimbab','description'=>'Comes with beef bulgogi or veggies','price'=>'26.25','promotion'=>'0','restaurant_id'=>'12','tags'=>'korean,bulgogi,beef']);
DB::table('dishes')->insert(['name'=>'Pork Bone Soup','description'=>'Spicy Korean soup made from the spine or neck bones of a pig. It contains potatoes, cellophane noodles, dried radish greens, perilla leaves, green onions, hot peppers and ground sesame seeds.','price'=>'30','promotion'=>'0','restaurant_id'=>'12','tags'=>'korean,spicy,soup,pork,bone']);
DB::table('dishes')->insert(['name'=>'Soft Tofu Stew','description'=>'The dish is made with freshly curdled soft tofu which has not been strained and pressed, vegetables, sometimes mushrooms, onion, optional seafood, optional meat, and gochujang or gochugaru.','price'=>'26.25','promotion'=>'0','restaurant_id'=>'12','tags'=>'tofu,vegan,korean,gochujang,gochugaru.']);
DB::table('dishes')->insert(['name'=>'Pork and Rice Soup','description'=>'Made with pork, soy sauce, miso, rice wine, sesame oil, and bone broth','price'=>'28.75','promotion'=>'0','restaurant_id'=>'12','tags'=>'korean,pork,rice,soup']);
DB::table('dishes')->insert(['name'=>'Boneless Soy Fried Chicken','description'=>'Iconic korean fried chicken, seasoned with a sweet soy sauce.','price'=>'28.75','promotion'=>'0','restaurant_id'=>'12','tags'=>'korean,fried chicken,soy,chicken']);
DB::table('dishes')->insert(['name'=>'Tangy Pad Thai','description'=>'Plant-based protein, spring onion, bean shoots, egg, peanuts, garlic + rice noodles in plant-based oyster sauce. *dish contains egg, option to remove.','price'=>'17.95','promotion'=>'0','restaurant_id'=>'13','tags'=>'vegan,thai,plant-based']);
DB::table('dishes')->insert(['name'=>'Crispy Salt & Pepper Tofu','description'=>'Crispy tofu bites cooked until golden, tossed in our secret Salt & Pepper dust and spring onions. Served with our signature sweet chilli dipping sauce.','price'=>'8.95','promotion'=>'0','restaurant_id'=>'13','tags'=>'tofu,vegan,fried tofu']);
DB::table('dishes')->insert(['name'=>'Umami Teriyaki','description'=>'Plant-based protein, spring onion, bean shoots, capsicum, broccoli, carrot, bok choy, onion, garlic + hokkien noodles in teriyaki sauce. *Noodles may contain egg, swap to rice noodles if required.','price'=>'17.95','promotion'=>'0','restaurant_id'=>'13','tags'=>'teriyaki,noodles,japanese,vegan,plant-based']);
DB::table('dishes')->insert(['name'=>'Sticky Pad See Ew','description'=>'Plant-based protein, spring onion, bean shoots, bok choy, broccoli, egg, onion, garlic + rice noodles in plant-based oyster sauce.','price'=>'17.95','promotion'=>'0','restaurant_id'=>'13','tags'=>'thai,noodles,vegan,plant-based']);
DB::table('dishes')->insert(['name'=>'Fragrant Mongolian','description'=>'Plant-based protein, spring onion, bean shoots, capsicum, broccoli, carrot, bok choy, onion, garlic + hokkien noodles in peppery sauce. *Noodles may contain egg, swap to rice noodles if required.','price'=>'17.95','promotion'=>'0','restaurant_id'=>'13','tags'=>'plant-based,vegan,chinese,mongolian,noodles']);
DB::table('dishes')->insert(['name'=>'Uncles Vegetable Fried Rice','description'=>'Your choice of plant-based protein, egg, bean shoots, peas, broccoli, spring onion + carrot. *Dish contains egg, option to remove.','price'=>'15.95','promotion'=>'0','restaurant_id'=>'13','tags'=>'chinese,rice,vegan,plant-based']);
DB::table('dishes')->insert(['name'=>'Traditional Lamb Yiros','description'=>'Traditional greek yiros on fluffy fresh pita, scorched lightly on the grill, filled with lamb shoulder, ripe tomato, red onion, parsley, tzatziki and chips.','price'=>'21','promotion'=>'0','restaurant_id'=>'14','tags'=>'greek,yiros,lamb,kebab']);
DB::table('dishes')->insert(['name'=>'Traditional Chicken Yiros','description'=>'Traditional greek yiros on fluffy fresh pita, scorched lightly on the grill, filled with maryland chicken, ripe tomato, red onion, parsley, tzatziki and chips.','price'=>'16.7','promotion'=>'0','restaurant_id'=>'14','tags'=>'greek,chicken,yiros,kebab']);
DB::table('dishes')->insert(['name'=>'Cheesy Chicken Snackbox','description'=>'Crispy chips topped with Tasty Cheese, Souvlaki Style Chicken, Special Sauce and Sweet Chilli Sauce.','price'=>'16','promotion'=>'0.4','restaurant_id'=>'14','tags'=>'snackpack,chips,chicken,greek,kebab']);
DB::table('dishes')->insert(['name'=>'Deal For 2','description'=>'Your choice of 2 Regular Traditional Yiros with 2 sides of your choice','price'=>'35.95','promotion'=>'0','restaurant_id'=>'14','tags'=>'greek,yiros,kebab,chicken,lamb,meal']);
DB::table('dishes')->insert(['name'=>'Double Beef & Cheese Yiros','description'=>'Traditional greek yiros on fluffy fresh pita, scorched lightly on the grill, filled with 2x Beef Kofta, tasty cheese, ripe tomato, red onion, parsley, tzatziki and chips.','price'=>'21','promotion'=>'0','restaurant_id'=>'14','tags'=>'beef,yiros,greek,kebab']);
DB::table('dishes')->insert(['name'=>'Traditional Halloumi Yiros','description'=>'Traditional greek yiros on fluffy fresh pita, scorched lightly on the grill, filled with grilled halloumi, ripe tomato, red onion, parsley, tzatziki and chips.','price'=>'16.7','promotion'=>'0','restaurant_id'=>'14','tags'=>'halloumi,greek,yiros,kebab']);
DB::table('dishes')->insert(['name'=>'Pork Ribs and Chips','description'=>'Grilled Pork Ribs are served with small chips, and Sauce of your choice on the ribs.','price'=>'35.99','promotion'=>'0','restaurant_id'=>'15','tags'=>'ribs,pork,australian,pub']);
DB::table('dishes')->insert(['name'=>'Cheesy Fries','description'=>'Fries, Shredded Cheese, Tomato and Onion salad, Chipotle Mayo sauce, Tomato salsa, and Choice of meat/ Vege.','price'=>'14.5','promotion'=>'0','restaurant_id'=>'15','tags'=>'fries,chips,loaded fries,pub']);
DB::table('dishes')->insert(['name'=>'Beef and Bacon Burger with Chips','description'=>'Char grilled Beef Patty, Bacon, Cheese slice, Lettuce, Tomato slice, Beetroot slice, Grilled Onion, Burger Sauce, Sauce of your choice, Milk bun toasted with butter, and small chips on side.','price'=>'20.5','promotion'=>'0','restaurant_id'=>'15','tags'=>'burger,beef,bacon,pub']);
DB::table('dishes')->insert(['name'=>'Flake and Chips','description'=>' ','price'=>'17.99','promotion'=>'0','restaurant_id'=>'15','tags'=>'fish,chips,fish and chips,pub']);
DB::table('dishes')->insert(['name'=>'Jalapeno Poppers','description'=>'Jalapeno peppers (3pcs) filled with Risotto and Cheese coated with a golden crumb.','price'=>'9.5','promotion'=>'0','restaurant_id'=>'15','tags'=>'jalapeno,poppers,fried,mexican']);
DB::table('dishes')->insert(['name'=>'Work Burger with Chips','description'=>'Char grilled Wagyu Beef Patty, Cheese slice, Bacon, Egg, Pineapple slice, Lettuce, Tomato slice, Beetroot slice, Grilled Onion, Burger Sauce, Sauce of your choice, Milk bun toasted with butter, and small chips on side.','price'=>'22.5','promotion'=>'0','restaurant_id'=>'15','tags'=>'works,burger,pub']);
DB::table('dishes')->insert(['name'=>'Battered Cod fillet with chips','description'=>'Served with chips + tartare sauce','price'=>'17','promotion'=>'0','restaurant_id'=>'16','tags'=>'seafood,fish and chips,fish,cod']);
DB::table('dishes')->insert(['name'=>'Battered Snapper fillet with chips','description'=>'Served with chips + tartare sauce','price'=>'25','promotion'=>'0','restaurant_id'=>'16','tags'=>'snapper,fish and chips,fish']);
DB::table('dishes')->insert(['name'=>'Grilled Tassie Salmon','description'=>'With tartare sauce','price'=>'18.5','promotion'=>'0','restaurant_id'=>'16','tags'=>'grilled fish,salmon,seafood']);
DB::table('dishes')->insert(['name'=>'Hot Chips','description'=>' ','price'=>'9','promotion'=>'0','restaurant_id'=>'16','tags'=>'chips']);
DB::table('dishes')->insert(['name'=>'Salt & Pepper Prawn Bali Bowl','description'=>'Gado Gado style superfood bowl','price'=>'32.5','promotion'=>'0','restaurant_id'=>'16','tags'=>'bowl,prawn,bali,gado gado,seafood']);
DB::table('dishes')->insert(['name'=>'Grilled Salmon Bali Bowl','description'=>'Gado Gado style superfood bowl','price'=>'32.5','promotion'=>'0','restaurant_id'=>'16','tags'=>'seafood,bowl,bali,gado gado,salmon']);
DB::table('dishes')->insert(['name'=>'Mexican Style Corn','description'=>'Two pieces. Mexican seasoned corn cooked on charcoal finished with cheese and special sauce.','price'=>'18.9','promotion'=>'0','restaurant_id'=>'17','tags'=>'bbq,vegan,corn,brazillian']);
DB::table('dishes')->insert(['name'=>'Brasilerio Steak','description'=>'Rump cap slices cooked with onion served on a hot plate','price'=>'23.9','promotion'=>'0','restaurant_id'=>'17','tags'=>'brazillian,bbq,rump,steak']);
DB::table('dishes')->insert(['name'=>'Crispy Pork Belly','description'=>'200g of pork belly slow cooked with a crispy skin finished on charcoal','price'=>'24.9','promotion'=>'0','restaurant_id'=>'17','tags'=>'brazillian,bbq,pork belly,pork']);
DB::table('dishes')->insert(['name'=>'Picanha (Rump Cap Steak)','description'=>'200g of Rump Cap steak','price'=>'24.9','promotion'=>'0','restaurant_id'=>'17','tags'=>'picanha,steak,bbq']);
DB::table('dishes')->insert(['name'=>'BBQ Pork Ribs and Chips','description'=>'BBQ Pork Ribs','price'=>'35.9','promotion'=>'0','restaurant_id'=>'17','tags'=>'ribs,bbq,brazillian,pork']);
DB::table('dishes')->insert(['name'=>'Frango','description'=>'Charcoal chicken','price'=>'17.9','promotion'=>'0','restaurant_id'=>'17','tags'=>'charcoal,chicken,brazillian,bbq']);
DB::table('dishes')->insert(['name'=>'Massaman Curry','description'=>'Massaman curry with potatoes, sweet potatoes, onion, cashew nuts and fried shallot','price'=>'25','promotion'=>'0','restaurant_id'=>'18','tags'=>'thai,curry,massaman']);
DB::table('dishes')->insert(['name'=>'Pad Thai','description'=>'Stir fried noodles with eggs and tofu. Served with bean shoots, chives, peanuts and lemon','price'=>'24','promotion'=>'0','restaurant_id'=>'18','tags'=>'thai,noodles']);
DB::table('dishes')->insert(['name'=>'Pad See Ew','description'=>'Stir fried rice noodles, cooked in a brown sauce with vegetables. Served with bean shoots and lemon','price'=>'24','promotion'=>'0','restaurant_id'=>'18','tags'=>'thai,rice,noodles']);
DB::table('dishes')->insert(['name'=>'Green Curry','description'=>'Green chilli paste cooked in coconut milk with bamboo shoots, basil and vegetables','price'=>'25','promotion'=>'0','restaurant_id'=>'18','tags'=>'thai,curry,green']);
DB::table('dishes')->insert(['name'=>'Chicken Satay','description'=>'Marinated tenderloin chicken skewers, served with peanut sauce','price'=>'14.5','promotion'=>'0','restaurant_id'=>'18','tags'=>'thai,chicken,satay']);
DB::table('dishes')->insert(['name'=>'Thai Dim Sim','description'=>'Minced pork and prawn wrapped in a wonton pastry','price'=>'13','promotion'=>'0','restaurant_id'=>'18','tags'=>'thai,snack,dim sum']);

        
    }
}
