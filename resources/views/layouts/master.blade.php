<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> @yield('title')</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/wp.scss')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('js/scroll.js')}}" type="text/js">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/fontawesome.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="{{asset('/fontawesome-free-6.4.0-web/css/solid.css')}}" rel="stylesheet">
    </head>
    <body>
    
    <script>
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) { 
                document.getElementById("hamburger").style.width = "20%";
                document.getElementById("hamburger").style.height = "200px";
                document.getElementById("hamburger").style.background = "rgba(255,255,255,0.7)";
                if(document.getElementById("userInfo") != null) {
                    document.getElementById("userInfo").style.left = "-1000px";
                    document.getElementById("userInfo").style.position = "fixed";
                    document.getElementById("title").style.position = "fixed"; 
                }
                if(document.getElementById("cart") !=null) {
                    document.getElementById("cart").style.position = "fixed"; 
                    document.getElementById("cart").style.left = "40px";
                    document.getElementById("cart").style.top = "90px";
                    document.getElementById("cartCount").style.position = "fixed"; 
                    document.getElementById("cartCount").style.left = "100px";
                    document.getElementById("cartCount").style.top = "115px";
                }
                if(document.getElementById("restUserOps") !=null) {
                    document.getElementById("restUserOps").style.position = "fixed"
                    document.getElementById("restUserOps").style.left = "10px"; 
                    document.getElementById("restUserOps").style.top = "110px";
                }
                if(document.getElementById("accOps") !=null) {
                    document.getElementById("accOps").style.position = "fixed"
                    document.getElementById("accOps").style.left = "40px"; 
                    document.getElementById("accOps").style.top = "90px";
                }
            
            
            } else {
                document.getElementById("hamburger").style.width = "50%";
                document.getElementById("hamburger").style.height = "150px";
                document.getElementById("hamburger").style.background = "rgb(255,255,255)";
                if(document.getElementById("userInfo") != null) {
                    document.getElementById("userInfo").style.left = "170px";
                }
                if(document.getElementById("cart") !=null) {
                    document.getElementById("cart").style.left = "490px"; 
                    document.getElementById("cart").style.top = "20px";
                    document.getElementById("cartCount").style.left = "550px"; 
                    document.getElementById("cartCount").style.top = "45px";
                }
                if( document.getElementById("restUserOps")) {
                    document.getElementById("restUserOps").style.top = "20px";
                    document.getElementById("restUserOps").style.left = "400px";
                }
               
                if(document.getElementById("accOps") !=null) {
                    document.getElementById("accOps").style.left = "300px"; 
                    document.getElementById("accOps").style.top = "15px";
                }
            }
        }
    </script>

     <span class="container">
      <span class="checkbox-container">
        <input class="checkbox-trigger" type="checkbox"  />
        <span class="menu-content">
            <span class="pullCont">
                <h1> Cuisines </h1> 
               <div id="pullTable" style="height:300px; overflow-y:scroll; overflow-x:hidden;">
                <table>
            
                @for($i = 0; $i < count($cuisines); $i+=2)
                <tr>
                    
                    <td>
                    <form action="{{url('/')}}"> 
                        <input type="hidden" name="search" value="{{$cuisines[$i]}}" >
                        <button type="submit"><span>{{$cuisines[$i]}}</span></button>
                    </form>
                    </td>
                    <td>
                    <form action="{{url('/')}}">
                        <input type="hidden" name="search" value="{{$cuisines[$i+1]}}" >
                        <button type="submit"><span>{{$cuisines[$i+1]}}</span></button>
                    </form>
                    </td>
                </tr>
                @endfor
                </table></div>
                @auth
                @if(Auth::user()->role == 1)
                <div class="accLinks">
                    <span>
                        <a data-toggle="modal" data-target="#exampleModal">Cart</a>
                    </span>
                    <span>
                        <a href='{{url("favs/".Auth::user()->id)}}'> Favourites </a>
                    </span>
                </div>
                @elseif(Auth::user()->role == 2)
                <div class="accLinks">
                    <span>
                        <a href=' {{url("dish/create")}}'> Create</a>
                    </span>
                    <span>
                        <a href='{{url("order/".$rest_id)}}'> Orders</a>
                    </span>
                </div>
                @endif
                @endauth
                @guest
                <div class="accLinks">
                    <span>
                        <a href="{{route('login')}}"> Log In </a> 
                    </span>
                
                    <span>
                        <a href="{{route('register')}}"> Sign Up</a> 
                    </span>
                </div>
                @endguest
                <div id="pullSearch">
                    <form> 
                    <div id="pullInput"> 
                        <input type="text" name="search" placeholder="Search for a favourite restaurant, cuisine or dish." > 
                        <button type="submit"> <p> Find Food! <p> </button> 
                    </div> 
                    </form> 
                </div>
            </span>
          <span class="hamburger-menu"></span>
        </span>
      </span>
    </span>

    <div id="menuBar">
        
        <div id="hamburger"> 
            <div id="title">
                <a href="{{url('/')}}">
                    <img src="{{url('images/logo2.png')}}" /> 
                </a>
            </div>
        @auth
        <div id="cartCont">
            <div id ="userInfo"> 
                <div id="profile">
                    <a data-toggle="modal" data-target="#exampleModal2">
                        <div>   
                            <i class="fa-solid fa-user"> </i> 
                        </div>
                        <div>
                            <p> {{Auth::user()->name}}</p>
                        </div>
                    </a>
                </div>
                <div>
                    <p> {{Auth::user()->address}} </p>
                </div>
                <div id="favsLink">
                    @if(Auth::user()->role == 1)
                    <a href='{{url("favs/".Auth::user()->id)}}'> <i class="fa-regular fa-heart"></i> Favourites </a>
                    @endif
                </div>
            </div> 
            @auth
            @if(Auth::user()->role == 1)
                <div id="cart"> 
                    <a data-toggle="modal" data-target="#exampleModal">
                         <img src="{{url('images/cart.png')}}" /> <span id="cartCount"><b> {{ count((array) session('cart')) }} </b></span>
                    </a>
                </div>
            @else 
            @auth
                @if(Auth::user()->role == 2)
                <div id="restUserOps">
                    <div>
                    <span id="createDish"> 
                        <a href=' {{url("dish/create")}}'> Create New Dish! </a></div>
                    <div>
                    <span id="viewOrders"> 
                        <a href='{{url("order/".$rest_id)}}'> View Orders </a></div>
                    
                </div>
                @endif
            @endauth
            @endif
        </div>  
    @endauth
    </div> 
    
        
        <div id="logOut" >
            <form method="POST"action ="{{url('/logout')}}">
                {{csrf_field()}}
                <input type="submit" value="Log Out">
            </form>
        </div>
    @else
        <div id="accOps">
            <div>
                <span id="logIn">
                    <a href="{{route('login')}}"> Log In </a> 
                </span>
            </div>
            <div>
                <span id="signUp">
                    <a href="{{route('register')}}"> Sign Up</a> 
                </span>
            </div>
        </div> 
    </div> 
    @endauth
    
    </div> 

    <div id="contContainer">
         
        @yield('content')
    </div> 
    </div>
    <div id="footer">
        <div>
            <img src="{{url('images/logo2.png')}}" /> 
        </div>
        
        <div class="fSec">
            <p> ©  2023 Jakeb Knowles </p> 
        </div>
        <div class="fSec"> 
            <p> THIS IS A MOCK / FAKE WEBSITE </p> 
        </div>
    </div> 

    {{-- cart model start here  --}}

    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <?php $total = 0  ?>
            @if(session('cart') != '[]' and session('cart') != null)
                <div id="cartTitle">
                    <em> Order For: </em> <b> {{Auth::user()->name}} </b>
                </div>
                <p class="addy"> {{Auth::user()->address}} · {{date('D jS M y g:i A')}} </p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          
                {{ csrf_field() }}
            <div class="modal-body">
                  @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
            <div class="cartItem">
                <div id="cartImg">
                    @if($details['image'])
                    <img src="{{ asset('storage/images/'.$details['image']) }}" />
                    @else 
                    <img src="{{url('images/noImg.jpg')}}"/>
                    @endif 
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
        <div id="empty">
            <p> Your Cart is Empty! </p> 
        </div>
        @endif
            </div>
        </div>
        </div>
    </div>
    {{-- cart model end here  --}}


    {{-- acc modal start here  --}}

    @auth
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3> {{Auth::user()->name}}'s Info</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          
               
            <div class="modal-body">
                    <form id="createForm" method="POST" action='{{url("user/".Auth::user()->id)}}' enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="createInput">
                            <label class="form-label"> Name: </label>
                            <input type="text" name="name" placeholder="Enter new Name" value="{{Auth::user()->name}}">
                            @error('name')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="line"> </div> 
                        
                        <div class="createInput">
                            <label class="form-label"> Email: </label>
                            <input type="text" name="email" placeholder="Enter new Email" value="{{Auth::user()->email}}"> 
                            @error('email')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="line">
                        </div>

                        <div class="createInput">
                            <label class="form-label"> Address: </label>
                            <input type="text" name="address" placeholder="Enter new Address" value="{{Auth::user()->address}}"> 
                            @error('address')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="line">
                        </div>
                        
                        <input type="hidden" name="restaurant" value="{{Auth::user()->name}}" readonly>

                        <div class="createSubmit2">
                            <button type="submit"> <p>Update</p> </button>
                        </div> 
                    </form>
                </div> 
        </div>
        </div>
    </div>
    @endauth
    {{--acc modal end here  --}}
    </body>
</html>