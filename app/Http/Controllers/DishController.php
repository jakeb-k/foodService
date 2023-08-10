<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish; 
use App\Models\Restaurant; 
use App\Models\Users; 
Use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {

        return view('dishes.cart');
    }
   
    public function addToCart($id)
    {
        $dish = Dish::find($id);
        
        
        if(!$dish) {
            abort(404);
        }
        $cart = session()->get('cart');
        
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $dish->name,
                        "quantity" => 1,
                        "price" => $dish->price - ($dish->promotion * $dish->price),
                        "restaurant_id" => $dish->restaurant_id,
                        "image" => $dish->image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        foreach($cart as $details) {
            
            if($dish->restaurant_id != $details['restaurant_id']) {
                session()->forget('cart'); 
                $cart[$id] = [
                "name" => $dish->name,
                "quantity" => 1,
                "price" => $dish->price,
                "restaurant_id" => $dish->restaurant_id,
                "image" => $dish->image
                ];
                DishController::addToCart($id); 
                return redirect()->back(); 
            } elseif($dish->restaurant_id == $details['restaurant_id']) {
                $cart[$id] = [
                "name" => $dish->name,
                "quantity" => 1,
                "price" => $dish->price,
                "restaurant_id" => $dish->restaurant_id,
                "image" => $dish->image
                ];
                session()->put('cart', $cart);
                return redirect()->back();
               
            }
        } 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        
    }
    public function remove(Request $request)
    { 
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }
        return back()->with('success', 'Product added to cart successfully!');
    }
    public function clearCart(){
        session()->forget('cart');
        return redirect()->back()->with('restaurants', Restaurant::paginate(6));
    }
    public function create()
    {
        if(Auth::user()->name ?? "" == null) {
             $rest_id = Auth::user()->id ?? ""; 
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name ?? "")
                ->get();
               
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        } else {
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name)
                ->get(); 
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        }
        $message = ""; 
        
       
        return view('dishes.create')->with('message',$message)->with('rest_id', $rest_id); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = Restaurant::whereRaw('name = ?', array($request->restaurant))->get(); 
        if(Auth::user()->name ?? "" == null) {
             $rest_id = Auth::user()->id ?? ""; 
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name ?? "")
                ->get();
               
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        } else {
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name)
                ->get();
                dd($rest); 
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        }
       


        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'promotion' => 'numeric|gt:-1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);

        $dishes = Dish::whereRaw('restaurant_id = ?', array($rest_id))->get(); 
        $dishNames = [];
        foreach($dishes as $dish){
            $dishNames[] = $dish->name;
        }
        $message = ""; 
        if(in_array($request->name, $dishNames) == False){
            $dish = new Dish();
            $dish->name = $request->name;
            $dish->price = $request->price;
            $dish->description = $request->description;
            $dish->promotion = $request->promotion/100; 
            $dish->tags = $request->tags ?? Auth::user()->name; 
            $dish->restaurant_id = $rest_id; 
            $dish->image = $fileName;  
            $dish->save();
            return redirect("restaurant/$rest_id");
        } else {
            $message = "Please select a unique dish name";
            $tags = explode(",", $dish->tags); 
            return view("dishes.create")->with('tags', $tags)->with('message', $message)->with('rest_id', $rest_id);  
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       
        if(Auth::user()->name ?? "" == null) {
             $rest_id = Auth::user()->id ?? ""; 
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name ?? "")
                ->get();
               
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        } else {
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name)
                ->get();
                dd($rest); 
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        }
        $dish = Dish::find($id);
        $tags = explode(",", $dish->tags); 
        return view('dishes.edit')->with('dish', $dish)->with('rest_id', $rest_id)->with('tags', $tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::whereRaw('name = ?', array($request->restaurant))->get(); 
        $restId = $restaurant[0]->id; 


        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'promotion' => 'numeric|gt:-1',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $dish = Dish::find($id);
        if($request->image != null) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
        } else {
            $fileName = $dish->image; 
        }

       
        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->description = $request->description;
        $dish->promotion = $request->promotion/100; 
        $dish->restaurant_id = $restId; 
        $dish->image = $fileName; 
        $dish->save();
        return redirect("restaurant/$restId");
    }
    public function tagPage($id) {

        if(Auth::user()->name ?? "" == null) {
             $rest_id = Auth::user()->id ?? ""; 
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name ?? "")
                ->get();
               
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        } else {
             $rest = \DB::table('restaurants')
                ->where('name','like', Auth::user()->name)
                ->get();
                dd($rest); 
                if($rest != '[]') {
                $rest_id = $rest[0]->id; 
                }
        }
        
        $dish = Dish::find($id);
        $tags = explode(",", $dish->tags); 
        return view('dishes.tags')->with('tags', $tags)->with('dish', $dish)->with('rest_id', $rest_id); 
    }
    public function addTag(Request $request, $id) {
        $dish = Dish::find($id);
        $tags = explode(",",$dish->tags); 
        $tags[] = $request->tag; 
        
        $dish->tags = implode(",",$tags);
        $dish->save(); 
        return redirect()->back(); 
    }
    public function deleteTag($id, $tag){
        
        $dish = Dish::find($id);
        $tags = explode(",",$dish->tags); 
        if(in_array($tag, $tags)){
            $index = array_search($tag, $tags);
            array_splice($tags, $index, 1); 
            $dish->tags = implode(",", $tags); 
            $dish->save();
        } 
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = Dish::find($id); 

        $dish->delete();
        return redirect()->back(); 
    }
}
