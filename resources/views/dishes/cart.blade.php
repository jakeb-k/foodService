<div id="background">
@extends('layouts.master')
@section('title')
    Cart
@endsection
@section('content')
<div id="cartContainer">
    <?php $total = 0  ?>
    @if(session('cart') != '[]' and session('cart') != null)
        <div id="cartTitle">
            <em> Order For: </em> <b> {{Auth::user()->name}} </b>
        </div>
        <p class="addy"> {{Auth::user()->address}} · {{date('D jS M y g:i A')}} </p>

        @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
            <div class="cartItem">

                <div id="cartImg">
                    <img src="{{ asset('storage/images/'.$details['image']) }}" />
                </div>

                <div class="cartInfo"> 

                    <div class="cartDetails">
                        <div> 
                            <span class="quant"> 
                                {{$details['quantity']}} 
                            </span>
                           x {{$details['name']}} 
                        </div>
                            <div id ="clearCart"> 
                                <form method="POST" action='{{url("remove-from-cart")}}'>
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="id" value="{{$id}}" /> 
                                    <button type="submit"> X </button>
                                </form>
                            </div>
                    </div>
                    <div class="cartDetails">
                        <div> 
                            <b> Price </b> 
                        </div>
                        <div>
                            ${{number_format($details['quantity'] * $details['price'], 2)}}
                        </div> 
                    </div>

                </div>
            </div>
            <div class="line">
            </div>
            @endforeach
        @endif
        @if($total != 0)
        <div id="totals">
            <div class="rInfo">
                <div> 
                    Subtotal
                </div>
                <div>
                    ${{number_format($total,2)}}
                </div>
            </div>
            <div class="rInfo">
                <div> 
                    GST
                </div>
                <div>
                    ${{number_format($total*0.1,2)}}
                </div>
            </div>
            <div class="line"> </div>
            <div class="rInfo">
                <div> 
                    <b> Total </b>
                </div>
                <div>
                   <b> ${{number_format(($total + $total*0.1),2)}} </b> 
                </div>
            </div>
        </div>
        <div class="line"> </div>
        <div id="cartOptions">
            <div id="deleteCart">
                <form method="POST" action='{{url("clear-cart")}}'>
                    {{csrf_field()}}
                    {{method_field('DELETE')}} 
                    <button type="submit"> Clear Cart </button>
                </form>
            </div>

            <div id="purchaseCart">
                <form method="POST" action='{{url("order")}}'>
                    {{csrf_field()}}
                    <input type="hidden" value="{{Auth::user()->id}}" name="id" /> 
                    <button type="submit"> Purchase </button> 
                </form>
            </div>

        </div>
        @else
        <p> Your cart is Empty! </p> 
        @endif
</div> 
@endsection
</div> 