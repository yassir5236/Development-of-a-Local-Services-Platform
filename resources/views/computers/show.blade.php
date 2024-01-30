@extends('layout')
@section('title',' Show computers')
@section('content')
<div class="  max-w-7xl mx-auto p-6 lg:p-8">
    <div class=" text-white flex justify-center">
        <h1>Computers </h1>
    </div>
    
 
      
    
    <div class="  flex justify-center mt-16 text-black">
       <h3>{{$computer['name']}} is from <strong>{{$computer['origin']}} -999$</strong></h3>
        
    </div>
    




</div>
@endsection