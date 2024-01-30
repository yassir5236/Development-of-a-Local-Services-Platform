@extends('layout')
@section('title','create computer')
@section('content')
<div class="  max-w-7xl mx-auto p-6 lg:p-8">
    <div class=" text-white flex justify-center p-6">
        <h1> Create a new Computer </h1>
    </div>

    <div class="bg-green  text-white flex justify-center">
        <form action="" method="post" >
            <label for="computer_name">Name</label><br>
            <input type="text" name="computer_name" id="computer_name"><br>
            <label for="computer_origin">Origin</label><br>
            <input type="text" name="computer_origin" id="computer_origin"><br>
            <label for="computer_price">price</label><br>
            <input type="text" name="computer_price" id="computer_price"><br>
            <button type="submit">Submit</button><br>
        </form>
    </div>
   
</div>
@endsection