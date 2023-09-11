<div id="background">
@extends('layouts.master')
@section('title')
@auth 
Orders for {{Auth::user()->name}} 
@endauth
@endsection
@section('content')
<div id="ordContainer">
            @if(count($orders) != 0)
                @for($i = 0; $i < count($orders); $i++)
                @if($orders[$i]->sent == false)
                
                <div class ="orderBox">
                    <img src="{{url('images/logo2.png')}}" /> 
                    <span class="orderTick"><a href='{{url("order/".$orders[$i]->id."/edit")}}'>✔</a></span>   
                    <p class="time"><em>{{$orders[$i]->updated_at->format('D jS M y g:i A')}} </em></p>
                   
                    <div class="line">
                    </div> 
                    <div class="rInfo">
                        <div> 
                            Customer Name 
                        </div>
                        <div>
                            {{$users[$i]->name}} 
                        </div>
                    </div> 
                    <div class="rInfo">
                        <div>
                            Customer Type
                        </div> 
                        <div>   
                            R{{$users[$i]->role}} 
                        </div>
                    </div>
                    <div class="rInfo">
                        <div> 
                            Delivery Address 
                        </div>
                        <div>
                            {{$users[$i]->address}} 
                        </div>
                    </div> 
                    <div class="line">
                    </div>
                @for($j = 0; $j <= count($ordered[$i])-1; $j+=2)
                    <p class="oItems"><b class="quant"> {{$ordered[$i][$j + 1]}} </b> x {{$ordered[$i][$j]}} </p>  
                @endfor
                    <div class="line">
                    </div>
                    <div class="rInfo">
                        <div>
                        Sub Total 
                        </div>
                        <div>
                        ${{number_format($total[$i], 2)}}
                        </div>
                    </div>
                    <div class="rInfo">
                        <div>
                            GST 
                        </div>
                        <div>
                            ${{number_format($total[$i]*0.10, 2)}}
                        </div>
                    </div>
                    <div class="line">
                    </div>
                    <div class="rInfo">
                        <div>
                           <b> Total </b>  
                        </div>
                        <div>
                          <b>  ${{number_format($total[$i] + $total[$i]*0.1, 2)}} </b> 
                        </div>
                    </div>
                </div>
                @endif 
                @endfor

            @else
            <p> No orders have been made yet </p> 
        @endif
    </div> 
@endsection
</div>
