@extends('layout')
@section('title','create service')
@section('content')
<div class="   mx-auto p-6 lg:p-8 bg-gray-200 ">


    <div class="flex items-center justify-center bg-gray-200">
        
    <form action="{{ route('services.store') }}" method="post" class="bg-white p-8 rounded-lg shadow-md w-96">
    <div class=" text-black text-2xl font-bold text-green-400 flex justify-center pb-6  ">
    <h1> Create a new Service </h1>
    </div>
        @csrf
        <div class="mb-4">
            
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="description" id="description" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" name="category" id="category" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="cost" class="block text-sm font-medium text-gray-700">Cost</label>
            <input type="text" name="cost" id="cost" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <button type="submit" class="bg-green-200 hover:bg-green-300 text-white px-4 py-2 rounded-md" style="background-color: #68D391;">Create</button>
    </form>
</div>



   
</div>
@endsection