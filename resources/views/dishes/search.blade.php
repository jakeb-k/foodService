
@extends('layouts.master')
@section('title')
@auth 
{{Auth::user()->name}} Orders
@endauth
@endsection
@section('content')
<?php $check = explode(",",Auth::user()->favs ?? ""); ?> 
    <div id="searchContainer">
       
        <div id="reSearch">
            <form> 
                <div id="subInput2"> 
                     <a id="return2" href="/FoodService/public"> &#9754 </a>
                    <input type="text" name="search" placeholder="Whats for Dinner?" > 
                    <button type="submit"> <p> Find Food! <p> </button> 
                </div> 
            </form> 
        </div>
        
    @if($dishes)    
        <div id="row">
    @foreach($dishes as &$dish)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div id="dishBox">
            @if($dish->image)
                @auth
                @if(Auth::user()->role == 1)
                <div id="addLinks">
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{ asset('storage/images/'.$dish->image) }}" />
                    </a>
                

                @if(str_contains(Auth::user()->favs, $dish->id))
                   <span class="favButton">
                        <form id="favForm2" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('POST')}}
                        <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                        <button type="submit">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        </form>
                    </span>
                @else 
                    <span class="favButton">
                        <form id="favForm" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('POST')}}
                        <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                        <button type="submit">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        </form>
                    </span>
                @endif
                </div>
                @else
                    <img src="{{ asset('storage/images/'.$dish->image) }}" />
                @endif
                @endauth
                @guest
                    <img src="{{ asset('storage/images/'.$dish->image) }}" />
                @endguest
            @else 
                @auth
                @if(Auth::user()->role == 1)
                    <div id="addLinks">
                    
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{url('images/noImg.jpg')}}"/>
                    </a>

                    @if(str_contains(Auth::user()->favs, $dish->id))
                        <span class="favButton">
                                <form id="favForm2" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                                <button type="submit">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                </form>
                            </span>
                        @else 
                            <span class="favButton">
                                <form id="favForm" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                                <button type="submit">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                </form>
                            </span>
                    @endif
                    </div>
                @else
                    <img src="{{url('images/noImg.jpg')}}"/>
                @endif
                @endauth
                @guest
                    <img src="{{url('images/noImg.jpg')}}"/>
                @endguest
            @endif 
            <p><b>{{$dish->name}}</b>- 
            @if($dish->promotion > 0 )
               <em> ${{number_format(($dish->price - ($dish->promotion * $dish->price)),2) }} ({{$dish->promotion*100}}% off) </em> </p> 
            @else
                ${{number_format($dish->price, 2)}} 
            @endif
            <p> {{$dish->description}} </p> 
            
        </div>
        </div> <div id="row"> 
        @else                  
        <div id="dishBox">
           
            @if($dish->image)
                @auth
                @if(Auth::user()->role == 1)
               <div id="addLinks">
                    
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{ asset('storage/images/'.$dish->image) }}" />
                    </a>

                    @if(str_contains(Auth::user()->favs, $dish->id))
                    <span class="favButton">
                            <form id="favForm2" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                    @else 
                        <span class="favButton">
                            <form id="favForm" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                    @endif
                    
                </div>
                @else
                    <img src="{{ asset('storage/images/'.$dish->image) }}" />
                @endif
                @endauth
                @guest
                    <img src="{{ asset('storage/images/'.$dish->image) }}" />
                @endguest
            @else 
                @auth
                @if(Auth::user()->role == 1)
                    <div id="addLinks">
                    
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{url('images/noImg.jpg')}}"/>
                    </a>

                    @if(str_contains(Auth::user()->favs, $dish->id))
                        <span class="favButton">
                                <form id="favForm2" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                                <button type="submit">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                </form>
                            </span>
                        @else 
                            <span class="favButton">
                                <form id="favForm" method="POST" action="/FoodService/public/user/{{Auth::user()->id}}/new-fav" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <input name="dish_id" type="hidden" value="{{$dish->id}}" /> 
                                <button type="submit">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                </form>
                            </span>
                    @endif
                    </div>
                @else
                    <img src="{{url('images/noImg.jpg')}}"/>
                @endif
                @endauth
                @guest
                    <img src="{{url('images/noImg.jpg')}}"/>
                @endguest
            @endif
           <p> <b>{{$dish->name}}</b> - 
            @if($dish->promotion > 0 )
               <em> ${{number_format(($dish->price - ($dish->promotion * $dish->price)),2) }} ({{$dish->promotion*100}}% off) </em> </p> 
            @else
                ${{number_format($dish->price, 2)}} 
            @endif
            </p> <p> {{$dish->description}} </p> 
            
        </div>
    
    @endif 
    @endforeach
    @endif

</div> 

@endsection

 





