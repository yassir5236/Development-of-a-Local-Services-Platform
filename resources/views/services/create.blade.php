@extends('layout')
@section('title','create service')
@section('content')
<div class="  max-w-7xl mx-auto p-6 lg:p-8">
    <div class=" text-black flex justify-center p-8 ">
        <h1> Create a new Service </h1>
    </div>

    <div class=" flex items-center justify-center bg-gray-100">
    <form action="" method="post" class="bg-white p-8 rounded-lg shadow-md w-96">
        <div class="mb-4">
            <label for="service_name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="service_name" id="service_name" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="service_origin" class="block text-sm font-medium text-gray-700">Origin</label>
            <input type="text" name="service_origin" id="service_origin" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="service_price" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" name="service_price" id="service_price" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Create</button>
    </form>
    </div>

   
</div>
@endsection