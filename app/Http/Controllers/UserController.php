<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish; 
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
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
    public function create()
    {
        //
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
        $cRests = Restaurant::all();
        $cuisines = [];
        foreach($cRests as $c){
            if(in_array($c->cuisine, $cuisines) == FALSE){
                $cuisines[]=$c->cuisine;
            }
        }
        $user = User::find($id); 
        $uDishes = explode(",",$user->favs);
        $favs = []; 
        foreach($uDishes as $d){
            $dish = Dish::find($d); 
            $favs[] = $dish;
        }
        
       #dd($favs); 
        return view('user.favs')->with('favs', $favs)->with('cuisines', $cuisines); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $user = User::find($request->id); 
        $favs = explode(",",$user->favs); 
        $favs[] = $id; 
        $user->favs = implode(",",$favs); 
        
        $order->sent = true; 
        $order->save(); 
         
        return redirect()->back();
    }
    public function newFav(Request $request, $id)
    {
        $user = User::find($id);
        
        $message = "";
        $favs = explode(",",$user->favs); 
        if(in_array($request->dish_id, $favs)){
            $index = array_search($request->dish_id, $favs);
            array_splice($favs, $index, 1); 
            $user->favs = implode(",", $favs); 
            $user->save();
        } else {
            $favs[] = $request->dish_id;
            $user->favs = implode(",",$favs); 
            $user->save();
        }
        return redirect()->back()->with('message', $message)->with('favs',$favs);
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
        #$user = User::whereRaw('name = ?', array($request->name))->get(); 
        $user = User::find($id);
        
        $this->validate($request, [
            'name' => 'max:255',
            'email' => 'email',
            'address' => 'max:255',
        ]);
        
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->address = $request->address; 
        $user->save(); 
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
        //
    }
}
