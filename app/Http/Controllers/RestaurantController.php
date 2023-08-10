<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant; 
use App\Models\Dish; 
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        if (request('search')) {
            $dishes = Dish::where('tags', 'like', '%' . request('search') . '%')->get(); 
            return view('dishes.search')->with('dishes', $dishes)->with('rest_id', $rest_id); 
        } else {
            $dishes = Dish::all();
        }
        
        $restaurants = Restaurant::paginate(6);
        $ids = \DB::table('users')
                ->where('role', '=', 2)
                ->get();
        
        
        return view('restaurants.index')->with('restaurants', $restaurants)->with('rest_id', $rest_id)->with('ids', $ids); 
    }
    public function favs($id) {
        $user = User::find($id); 
        $uDishes = explode(",",$user->favourites);
        $favs = []; 
        foreach($uDishes as $d){
            $dish = Dish::find($d); 
            $favs[] = $dish;
        }
        return view('user.favs')->with('favs', $favs); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->name ?? "" == null) {
             $rest_id = Auth::user()->id ?? ""; 
        } else {
           
             $rest = \DB::table('users')
                ->where('name', '=', Auth::user()->name)
                ->get();
                $rest_id = $rest[0]->id; 
        }
        $dSigns = [''];
        $message = "";
        $dishes = Dish::whereRaw('restaurant_id = ?', array($id))->paginate(6); 
        $restaurants = Restaurant::find($id); 
        for($i = 1; $i < $restaurants->priceLv; $i++) {
            $dSigns[] = '$'; 
        }
        return view('restaurants.show')->with('dishes', $dishes)->with('restaurants', $restaurants)->with('priceLv', $dSigns)->with('message', $message)->with('rest_id', $rest_id); 
    }
    public function search(Request $request) {
        dd($request); 
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dish = Dish::find($id);
        return view('restaurants.edit')->with('dish',$dish);  
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
