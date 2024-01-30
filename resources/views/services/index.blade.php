@extends('layout')
@section('title','services')
@section('content')
<div class="  max-w-7xl mx-auto p-6 lg:p-8">
    <div class=" text-black flex justify-center">
        <h1>Services </h1>
    </div>
    
    @if (count($services)==0)
        <h1>there is no services</h1>
    @else 
    <div class="  flex justify-center mt-16 text-black">
       
        <ul>
            @foreach($services as $service)
            <li>
            <a href="{{route('services.show',['service' =>$service['id']])}}">{{$service['name']}} is from <strong>{{$service['origin']}} -999$</strong></a>
            </li>
            @endforeach
        </ul>
    </div>
    @endif




</div>
@endsection