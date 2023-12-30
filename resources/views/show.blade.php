@extends('layouts.main')

@section('container')

<h1>Category: {{ $category->name }} </h1>

@if ($category->products->count())
    <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <p>Total Products in this Category: {{ $totalProducts }}</p>
        @foreach ($category->products as $product)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-10 mx-6">
                <a href="/product/{{ $product->code }}">
                    @if ($product->image && file_exists(public_path('storage/' . $product->image)))
                      <img class="p-8 rounded-t-lg" src="{{ asset('storage/'.$product->image) }}" >
                    @elseif ($product->image)
                      <img class="p-8 rounded-t-lg" src="{{ $product->image }}" >
                    @endif
                  </a>
                <div class="px-5 pb-5">
                    <a href="{{ url('/product/'.$product->code) }}">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">{{ $product->product_name }}</h5>
                    </a>
                    <p class="text-md font-medium tracking-tight text-gray-900 ">{{ $product->category->name }}</p>
                    <p class="text-lg font-bold text-green-500 mb-5 mt-1">{{ $product->price }}</p>
                    <a href="#" class="grid mx-9 text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">ADD TO CART</a>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p class="text-center text-2xl mt-48 ml-10">No Products Found for {{ $category->name }}</p>
@endif

    
@endsection