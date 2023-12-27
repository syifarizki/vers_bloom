@extends('dashboard.layouts.main')

@section('container')
<section class="flex justify-center my-10 pt-20">
 <div href="#" class="flex sm:ml-64 flex-col items-center ml-48 w-full h-full bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl ">
    @if ($product->image)
    <img class="object-cover w-full rounded-t-lg max-h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}">  
    @else
    {{-- srcnya seharusnya pake unsplash --}}
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/img/jumbotron.png" alt="product">    
    @endif
    <div class="flex flex-col justify-between p-4 leading-normal">
        
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product Name : {{ $product->product_name}}</h5>
       <p>Common Name : {{ $product->common_name }}</p>
       <p>Code : {{ $product->code}}</p>
        {{-- <p>Category : {{ $product->category->name }} </p> --}}
        <p>Price : {{ $product->price }}</p>
        {!! $product->description !!}
     
        <a href="/dashboard/posts" class=" text-black mt-4 bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">Back</a>
        
        
    </div>
</div>
</section>

@endsection