

@extends('layouts.master')
@section('title')
Restaurants
@endsection
@section('content')
<?php $check = explode(",",Auth::user()->favs); ?> 
<div id = "favContainer">
    <a id="return2" href="{{url('/')}}"> &#9754 </a>
  <div id="row">
    @if($favs)
    @foreach($favs as $fav)
    @if($fav) 
    @if($loop->index % 3 == 2 && $loop->index > 0)
        <div id="dishBox">
            @if($fav->image)
                @auth
                @if(Auth::user()->role == 1)
                <div id="addLinks">
                     <a href='{{url("add-to-cart/$fav->id")}}'> 
                        <img src="{{ asset('storage/images/'.$fav->image) }}" />
                    </a>

                    @if(str_contains(Auth::user()->favs, $fav->id))
                        <span class="favButton">
                            <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
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
                            <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                     @endif
                </div>
                @endif
                @endauth
            @else 
                @auth
                @if(Auth::user()->role == 1)
                    <div id="addLinks">
    
                    <a href='{{url("add-to-cart/$fav->id")}}'> 
                        <img src="{{url('images/noImg.jpg')}}"/>
                    </a>

                    @if(in_array(strval($fav->id), $check, true)) 
                        <span class="favButton">
                                <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
                                <button type="submit">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                </form>
                            </span>
                        @else 
                            <span class="favButton">                       {{url("restaurant/".$restaurant->id)}}
                                <form id="favForm" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
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
            <p><b>{{$fav->name}}</b>- 
            @if($fav->promotion > 0 )
               <em> ${{number_format(($fav->price - ($fav->promotion * $fav->price)),2) }} ({{$fav->promotion*100}}% off) </em> </p> 
            @else
                ${{number_format($fav->price, 2)}} 
            @endif
            <p class="desc"> {{$fav->description}} </p> 
        </div>
        </div> <div id="row"> 
        @else                  
        <div id="dishBox">
            @if($fav->image)
                @auth
                @if(Auth::user()->role == 1)
                <div id="addLinks">
                     <a href='{{url("add-to-cart/$fav->id")}}'> 
                        <img src="{{ asset('storage/images/'.$fav->image) }}" />
                    </a>
                    @if(str_contains(Auth::user()->favs, $fav->id))
                        <span class="favButton">
                            <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
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
                            <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
                            <button type="submit">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            </form>
                        </span>
                     @endif
                </div>
                @endif
                @endauth
            @else 
                @auth
                @if(Auth::user()->role == 1)
                    <div id="addLinks">
                     <a href='{{url("add-to-cart/$fav->id")}}'> 
                        <img src="{{url('images/noImg.jpg')}}"/>
                    </a>

                    @if(in_array(strval($fav->id), $check, true)) 
                        <span class="favButton">
                                <form id="favForm2" method="POST" action='{{url("user/".Auth::user()->id."/new-fav")}}' enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
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
                                <input name="fav_id" type="hidden" value="{{$fav->id}}" /> 
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
           <p> <b>{{$fav->name}}</b> - 
            @if($fav->promotion > 0 )
               <em> ${{number_format(($fav->price - ($fav->promotion * $fav->price)),2) }} ({{$fav->promotion*100}}% off) </em> </p> 
            @else
                ${{number_format($fav->price, 2)}} 
            @endif
            </p> <p class="desc"> {{$fav->description}} </p> 
        </div>
    @endif
    @endif
    @endforeach
    @else
    <p> No results available </p> 
    @endif 

</div> 
 

@endsection
