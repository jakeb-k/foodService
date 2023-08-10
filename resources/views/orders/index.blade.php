<div id="background">
@extends('layouts.master')
@section('title')
    Order For {{Auth::user()->name}} 
@endsection
@section('content')
<div id="cartContainer">
    <?php $total = 0  ?>
    @if(session('cart') != '[]' and session('cart') != null)
        <div id="fOrderBox">
            <img src="{{url('images/logo2.png')}}" />  
        </div>
        <div id="cartTitle">
            <em> Order For: </em> <b> {{Auth::user()->name}} </b> <b>✔</b>
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
                            <div> 
                                <b>✔</b>
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
        
        <div id="newCart">
            <form method="POST" action='{{url("clear-cart")}}'>
                {{csrf_field()}}
                {{method_field('DELETE')}} 
                <button type="submit"> New Order </button>
            </form>
        </div>
        
        @else
        <p> Your cart is Empty! </p> 
        @endif
</div> 
@endsection
</div> 