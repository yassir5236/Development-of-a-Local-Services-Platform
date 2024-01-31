@extends('layout')
@section('title', 'Services')
@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8 ">
    <div class="text-black flex justify-center">
        <!-- <h1 class="text-2xl font-semibold">Services</h1> -->
    </div>

    @if (count($services) == 0)
        <p class="mt-4">There are no services.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-8 ">
            @foreach($services as $service)
                <div class=" p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 duration-300 bg-gray-200 bg-opacity-70 border border-2">
                    <h2 class="text-4xl font-semibold mb-4 text-green-600 text-center ">{{ $service->title }}</h2>
                    <p class="text-gray-700 mb-2">{{ $service->description }}</p>
                    <p class="text-gray-700 mb-2"><strong>Category:</strong> {{ $service->category->name }}</p>
                    <p class="text-gray-700 mb-2"><strong> Cost : </strong> {{ $service->cost }}$</p>
                    <p class="text-gray-700 mb-2"><strong> Email : </strong> {{ $service->email }}$</p>
                    
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
