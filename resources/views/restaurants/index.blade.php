
<div id="splashCont">
  @extends('layouts.master')
  @section('title')
  Restaurants
  @endsection
  @section('content')
  <div id="restSearch">
    <h1><b> Crave it? Get it. </b> </h1>
    <form> 
      <div id="subInput"> 
        <input type="text" name="search" placeholder="Search for a favourite restaurant, cuisine or dish." > 
        <button type="submit"> <p> Find Food! <p> </button> 
      </div> 
    </form> 
  </div>
</div>   
</div> 
<div id="restTitle"><p><b> Hot Spots </b></p> </div> 
<div id = "restaurantsContainer">
  <div id="row">
    @foreach($restaurants as $restaurant)
    @if($loop->index % 3 == 2 && $loop->index > 0)
    <div id="restHolder"> 
      <a href="restaurant/{{$restaurant->id}}">
        <div class="restCont">
          <img src="{{$restaurant->image}}"/> 
        </div>  
      </a>
      <p><b>{{$restaurant->name}}</b> </br> ({{$restaurant->location}}) ·   
            @for($i = 0; $i < $restaurant->priceLv; $i++) 
            $  
            @endfor</p>
    </div> 
    </div> 
    <div id="row"> 
      @else 
      <div id="restHolder"> 
        <a href="restaurant/{{$restaurant->id}}">
          <div class="restCont">
            <img src="{{$restaurant->image}}"/> 
          </div>  
        </a>
        <p>  <b> {{$restaurant->name}}</b> </br> ({{$restaurant->location}}) ·   
            @for($i = 0; $i < $restaurant->priceLv; $i++) 
            $  
            @endfor</p>
      </div> 
    @endif
    @endforeach
</div> 

<div id="pageBar">
   {{$restaurants->links()}}
</div>  

@endsection
