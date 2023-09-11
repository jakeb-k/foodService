<div id="background">
@extends('layouts.master')
@section('title')
    Edit {{$dish->name}}
@endsection
@section('content')
<div id="createContainer">
    <a id="return" href="{{url('restaurant/'.$dish->restaurant_id)}}" style="text-decoration:none;"> &#9754 </a>
    <h1> Update {{$dish->name}} </h1>
        <form id="createForm" method="POST" action='{{url("dish/$dish->id")}}' enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" value="{{$dish->name}}">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="line"> </div> 
            
            
            <div class="createInput">
            <label class="form-label"> Price<span class="formReq">*</span>: </label>
            <input type="text" name="price" value="{{$dish->price}}"> 
            @error('price')
                <div class="alert">{{ $message }}</div>
            @enderror
            </div>
            <div class="line">
            </div>
            
            
            <div class="createInput">
                <label class="form-label"> Promotion: </label>
                <input type="number" name="promotion" step="5" min="0" max="100" value="{{$dish->promotion * 100}}">
                @error('promotion')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>

            
            <div class="line">
            </div>
            
            <div class="createInput">
                <label class="form-label"> Description: </label>
                <input type="text" name="description" value="{{$dish->description}}">
                @error('description')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="line">
            </div>

            <div class="createInput2">
                <a data-toggle="modal" data-target="#exampleModal3">
                    <label class="form-label">Add Tags: </label>
                </a>
                <div id="tagCont">
                    <span class="form-label"> Click to Remove </span> <br />
                    @foreach($tags as $tag)
                        <a href='{{url("dish/$dish->id/add-tag/$tag/")}}' class="tag"> {{$tag}} </a> 
                    @endforeach
                    
                </div>
                
                    
                @error('tags')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="line">
            </div>
            

            <div class="createInput">
                <label class="form-label"> Image<span class="formReq">*</span>: </label> 
                <input id="file" type="file" name="image">
                @error('image')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            
            <input type="hidden" name="restaurant" value="{{Auth::user()->name}}" readonly>
            <div class="line">
            </div>
            <div class="line">
            </div>
            <div class="createSubmit2">
                <button type="submit"> <p>Update</p> </button>
            </div> 
        </form>
        <div>
</div>
</div> 

@endsection
</div>
</div> 
{{-- tag modal start here  --}}

    @auth
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3> Add Tags </h3> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          
               
            <div class="modal-body">
                   
                        <div id="addTag">
                        <form id="tagForm" method="POST" action='{{url("dish/$dish->id/add-tag/")}}'>
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <input id="tag" type="text" name="tag">
                            <div id="addTag">
                                <button type="submit"> + </a> 
                            </div>
                        </form>
                        </div>
                </div> 
        </div>
        </div>
    </div>
    @endauth
    {{--tag modal end here  --}}
