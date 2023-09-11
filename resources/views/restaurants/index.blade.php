
<div id="splashCont">
  @extends('layouts.master')
  @section('title')
  Food Service
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
<div id = "restaurantsContainer">
  <div class="sideMenu">
    <h1> Cuisines </h1>
    <table>
      @for($i = 0; $i < count($cuisines); $i+=2)
      <tr>
        <td>
          <form>
            <input type="hidden" name="search" value="{{$cuisines[$i]}}" >
            <button type="submit"><span>{{$cuisines[$i]}}</span></button>
          </form>
        </td>
        <td>
          <form>
            <input type="hidden" name="search" value="{{$cuisines[$i+1]}}" >
            <button type="submit"><span>{{$cuisines[$i+1]}}</span></button>
          </form>
        </td>
      </tr>
      @endfor
    </table>
  </div>
  <div id="restContent">
    <div id="restTitle"><p><b> Hot Spots </b></p> </div> 
    <div id="row">
      @foreach($restaurants as $restaurant)
      @if($loop->index % 3 == 2 && $loop->index > 0)
      <div id="restHolder"> 
        <a href='{{url("restaurant/".$restaurant->id)}}'>
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
          <a href='{{url("restaurant/".$restaurant->id)}}'>
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
    <div class="pageBar">
        {{$restaurants->links()}}
      </div>  
  </div>
</div>



@endsection
