<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish; 
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index'); 
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
        $cRests = Restaurant::all();
        $cuisines = [];
        foreach($cRests as $c){
            if(in_array($c->cuisine, $cuisines) == FALSE){
                $cuisines[]=$c->cuisine;
            }
        }
        $cart = session('cart'); 
        $total = 0; 
        $dishes = []; 
        $ordered = []; 
        foreach($cart as $dish){ 
            $getDish = Dish::whereRaw('name = ?', array($dish['name']))->get(); 
            $dishes[] = $dish['name']; 
            $dishes[] = $dish['quantity'];
            
            $quantity = $dish['quantity']; 
            $price = $dish['quantity']* $dish['price'];
            $total += $price;
            
        }
            $userId = intval($request->id);
            $order = new Order();
            $order->total = $total;
            $order->dishes = implode(",",$dishes);  
            $order->sent = false; 
            $order->user_id = $userId;
            $order->restaurant_id = $getDish[0]->restaurant_id;    
            $order->save(); 
        return view("orders.index")->with('time', $order->created_at)->with('cuisines', $cuisines);
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
        $orders = Restaurant::find($id)->order;
        $rest = \DB::table('users')
                    ->where('name', '=', Auth::user()->name)
                    ->get();
        $rest_id = $rest[0]->id; 
        $users = []; 
        $dishes = []; 
        $ordered = []; 
        $total = []; 
        foreach($orders as $order){ 
            $total[] = $order->total; 
            $user = User::find($order->user_id); 
            $users[] = $user; 
            $ordered[] = explode(",",$order->dishes);
        }
        return view('orders.show')->with('orders', $orders)->with('users', $users)->with('ordered', $ordered)->with('total', $total)->with('rest_id',$rest_id)->with('cuisines',$cuisines); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id); 
        $order->sent = true; 
        $order->save(); 
         
        return back();
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
