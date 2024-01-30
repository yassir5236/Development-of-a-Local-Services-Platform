@extends('layout')
@section('title',' Show services')
@section('content')
<div class="  max-w-7xl mx-auto p-6 lg:p-8">
    <div class=" text-white flex justify-center">
        <h1>services </h1>
    </div>
    
 
      
    
    <div class="  flex justify-center mt-16 text-black">
       <h3>{{$service['name']}} is from <strong>{{$service['origin']}} -999$</strong></h3>
        
    </div>
    




</div>
@endsection