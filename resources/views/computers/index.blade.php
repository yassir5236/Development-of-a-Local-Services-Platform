@extends('layout')
@section('title','computers')
@section('content')
<div class="  max-w-7xl mx-auto p-6 lg:p-8">
    <div class=" text-black flex justify-center">
        <h1>Computers </h1>
    </div>
    
    @if (count($computers)==0)
        <h1>there is no computers</h1>
    @else 
    <div class="  flex justify-center mt-16 text-black">
       
        <ul>
            @foreach($computers as $computer)
            <li>
            <a href="{{route('computers.show',['computer' =>$computer['id']])}}">{{$computer['name']}} is from <strong>{{$computer['origin']}} -999$</strong></a>
            </li>
            @endforeach
        </ul>
    </div>
    @endif




</div>
@endsection