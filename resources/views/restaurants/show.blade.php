@extends('layouts.master')
@section('title')
{{$restaurants->name}}
@endsection

@section('content')

<div id="dishContainer">
    
    <div class="restInfo"> 
        <a id="return" href="{{url('/')}}" style="text-decoration:none;"> &#9754 </a>
        <p> 
            <b> 
                {{$restaurants->name}} 
            </b> ({{$restaurants->location}}) 
            </br>
            {{$restaurants->rating}} &#9733; · 
            @foreach($priceLv as $p) 
                $  
            @endforeach · {{$restaurants->cuisine}} 
            </br>
            @if($message != "")
            <span class="alert">    {{$message}} </span> 
            @endif
        </p>
    </div> 
    
        
        
        
        <div id="row">
    @foreach($dishes as &$dish)
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div id="dishBox">
            @if($dish->image)
                @auth
                @if(Auth::user()->role == 1)
                <?php $check = explode(",",Auth::user()->favs); ?> 
                <div id="addLinks">
                    
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{ asset('storage/images/'.$dish->image) }}" />
                    </a>
                    
                @if(in_array(strval($dish->id), $check, true)) 
                   <span class="favButton">
                        <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
                        <form id="favForm" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
                <?php $check = explode(",",Auth::user()->favs); ?> 
                @if(Auth::user()->role == 1)
                    <div id="addLinks">
                   
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{url('images/noImg.jpg')}}"/>
                    </a>

                    @if(in_array(strval($dish->id), $check, true)) 
                        <span class="favButton">
                                <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
                                <form id="favForm" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
            <p class="desc"> {{$dish->description}} </p> 
            @auth
            <?php $check = explode(",",Auth::user()->favs); ?> 
                @if(Auth::user()->name == $restaurants->name)
                <div id="dishOps">
                    <div id="deleteDish">
                        <form method="POST" action='{{url("dish/$dish->id")}}'>
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" value="">Delete</button>
                        </form>
                    </div> 
                    <span id="editDish">
                        <a href='{{url("dish/$dish->id/edit")}}'>  Edit  </a>  
                    </span>
                </div>
                @endif
            @endauth
        </div>
        </div> <div id="row"> 
        @else                  
        <div id="dishBox">
            @if($dish->image)
                @auth
                <?php $check = explode(",",Auth::user()->favs); ?> 
                @if(Auth::user()->role == 1)
               <div id="addLinks">
                   
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{ asset('storage/images/'.$dish->image) }}" />
                    </a>
                    
                    @if(in_array(strval($dish->id), $check, true)) 
                    <span class="favButton">
                            <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
                            <form id="favForm" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
                <?php $check = explode(",",Auth::user()->favs); ?> 
                @if(Auth::user()->role == 1)
                    <div id="addLinks">
                   
                    <a href='{{url("add-to-cart/$dish->id")}}'> 
                        <img src="{{url('images/noImg.jpg')}}"/>
                    </a>

                    @if(in_array(strval($dish->id), $check, true)) 
                        <span class="favButton">
                                <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
                                <form id="favForm" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
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
            </p> <p class="desc"> {{$dish->description}} </p> 
            @auth
                @if(Auth::user()->name == $restaurants->name)
                
                <div id="dishOps">
                    <div id="deleteDish">
                        <form method="POST" action='{{url("dish/$dish->id")}}'>
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" value="">Delete</button>
                        </form>
                    </div> 
                    <span id="editDish">
                        <a href='{{url("dish/$dish->id/edit")}}'>  Edit  </a>  
                    </span>
                </div>
                @endif
                
            @endauth
        </div>
    @endif 
    @endforeach
    
</div> 
<div id="pageBar">
  {{$dishes->links()}}
</div>
@endsection 
