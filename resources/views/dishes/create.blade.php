<div id="background">
@extends('layouts.master')
@section('title')
    Create New Dish!
@endsection
@section('content')

<div id="createContainer">
    <h1> Create New Dish! </h1>
        <form id="createForm" method="POST" action='{{url("dish")}}' enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="createInput">
                <label class="form-label"> Name<span class="formReq">*</span>: </label>
                <input type="text" name="name" placeholder="Enter a Name for the New Dish!">
                @error('name')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="line"> </div> 
            
            
            <div class="createInput">
            <label class="form-label"> Price<span class="formReq">*</span>: </label>
            <input type="text" name="price" placeholder="How Much Will it Cost?"> 
            @error('price')
                <div class="alert">{{ $message }}</div>
            @enderror
            </div>
            <div class="line">
            </div>
            
            
            <div class="createInput">
                <label class="form-label"> Promotion: </label>
                <input type="number" name="promotion" step="5" min="0" max="100" placeholder="Enter Promotion Percentage. (optional)">
                @error('promotion')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>

            
            <div class="line">
            </div>
            
            <div class="createInput">
                <label class="form-label"> Description: </label>
                <input type="text" name="description" placeholder="A short description for customers. (optional)">
                @error('description')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="line">
            </div>

            <div class="createInput">
                <label class="form-label">Tags:<span class="formReq"></span></label>
                <input type="text" name="tags" placeholder="Enter tags ... healthy,burger,chicken">
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
            
            <input type="hidden" name="rest_id" value="{{Auth::user()->id}}" readonly>
            <input type="hidden" name="restaurant" value="{{Auth::user()->name}}" readonly/> 
            <div class="createSubmit2">
                <button type="submit"> <p>Create</p> </button>
            </div> 
        </form>
    <p class = "alert"> {{$message}} </p> 
</div> 
@endsection
</div>