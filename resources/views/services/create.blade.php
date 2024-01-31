@extends('layout')
@section('title','create service')
@section('content')
<div class="   mx-auto p-6 lg:p-8  ">


    <div class="flex items-center justify-center  ">

        <form action="{{ route('services.store') }}" method="post" class="p-8 rounded-lg shadow-md w-96 border boder-2 bg-gray-200 bg-opacity-30">
            <div class=" text-2xl font-bold text-white flex justify-center pb-6  ">
                <h1> Create a new Service </h1>
            </div>
            @csrf
            <div class="mb-4">

                <label for="title" class="block text-sm font-medium text-white">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-white">Description</label>
                <input type="text" name="description" id="description" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-white pb-2 ">Category</label>
                <select name="category_id" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="cost" class="block text-sm font-medium text-white">Cost</label>
                <input type="text" name="cost" id="cost" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-white">Email</label>
                <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>
           
            <button type="submit" class="bg-green-200 hover:bg-green-300 text-white px-4 py-2 rounded-md" style="background-color: #68D391;">Create</button>
        </form>

        <!-- resources/views/services/create.blade.php -->


    </div>




</div>
@endsection