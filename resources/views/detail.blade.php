@extends('layouts.main')

@section('container')

<section class="flex justify-left ml-3 my-2 mr-96 mb-8">
 <div href="#" class="flex shadow-xl sm:ml-64 flex-col items-center ml-48 w-full h-full bg-slate-100 border border-gray-200 rounded-xl  md:flex-row md:max-w-xl ">
    <div class="flex flex-col justify-between p-4 leading-normal">
    <a href="/product/{{ $product->code }}">
            @if ($product->image && file_exists(public_path('storage/' . $product->image)))
              <img class="p-8 rounded-t-lg" src="{{ asset('storage/'.$product->image) }}" >
            @elseif ($product->image)
              <img class="p-8 rounded-t-lg" src="{{ $product->image }}" >
            @endif
          </a>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">Product Name : {{  $product->product_name}}</h5>
        <p>Common Name : {{ $product->common_name }}</p>
       <p>Code : {{ $product->code}}</p>
        <p>Category : {{ $product->category->name }} </p>
        <p>Price : {{ $product->price }}</p>
        <p> Deskripsi : {!! $product->description !!} </p>
     
         
        </p>
     
      
      <span class="mt-8 ">
        <a href="/product" class=" text-black mt-10 bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">Back</a>
      </span>
        
    </div>
</div>
</section>

@endsection