<div id="background">
@extends('layouts.master')
@section('title')
    Edit {{$dish->name}}
@endsection
@section('content')
<div id="createContainer">
    <h1> Update {{$dish->name}} </h1>
        <div class="createInput2">
            <div id="tagCont">
                    @foreach($tags as $tag)
                        <button class="tag"> {{$tag}} </button> 
                    @endforeach
                    
                </div>
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
    <div>
</div>
</div> 

@endsection
</div>
</div> 
            
            
            
            