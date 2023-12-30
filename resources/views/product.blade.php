@extends('layouts.main')

@section('container')
<section id="product" class="-mt-40 w-screen -ml-5 mr-10 h-screen bg-fixed p-10 mb-[1840px] md:mb-[640px] md:-ml-10 lg:mb-10 ">
    <h3 class="font-bold text-left ml-10 text-3xl">{{ $title }}</h3>
    
    {{-- filter --}}
    <a id="dropdownCheckboxButton" data-dropdown-toggle="dropdown" class="text-black bg-white mt-4 ml-10
      focus:ring-4 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 shadow-sm focus:outline-none focus:ring-slate-400 font-medium text-lg rounded-lg 
     px-7 py-2.5 text-center inline-flex items-center mb-4" type="button">Filter by
       <svg class="w-2.5 h-2.5 ms-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
    </a>
  
  <!-- Dropdown menu -->
  <!-- <div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow ">
      <ul class="p-3 space-y-3 text-sm text-gray-700 " aria-labelledby="dropdownCheckboxButton">
        <li>
          <div class="flex items-center">
            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500  focus:ring-2 ">
            <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-gray-900 ">Category</label>
          </div>
        </li>
        <li>
      </ul>
  </div> -->

    {{-- sort --}}
    <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black bg-white mt-4 ml-5
      focus:ring-4 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 shadow-sm focus:outline-none focus:ring-slate-400 font-medium text-lg rounded-lg 
     px-7 py-2.5 text-center inline-flex items-center mb-4" type="button">Sort by
       <svg class="w-2.5 h-2.5 ms-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
    </a>
      
      <!-- Dropdown menu -->
      <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
          <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100  "> 
                <div class="flex justify-between">
                   Price Low-High
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100  "> 
                <div class="flex justify-between">
                   Price High-Low
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100  "> 
                <div class="flex justify-between">
                   Latest Product
                </div>
              </a>
            </li>
          </ul>
      </div>


<form>   
    <div class="relative mt-5 ml-10 mr-10">
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50" placeholder="Search...." required>
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#94B49F] hover:bg-slate-200 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>



@if ($products->count())
    <div class=" px-6 grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4  ">
      @foreach ($products as $product)
        <div class="w-full max-w-sm  bg-white border border-gray-200 rounded-lg shadow mt-10 mx-6">

          <a href="/product/{{ $product->code }}">
            @if ($product->image && file_exists(public_path('storage/' . $product->image)))
              <img class="p-8 rounded-t-lg" src="{{ asset('storage/'.$product->image) }}" >
            @elseif ($product->image)
              <img class="p-8 rounded-t-lg" src="{{ $product->image }}" >
            @endif
          </a>


            <div class="px-5 pb-5">
                <a href="/product/{{ $product->code }}">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">{{ $product->common_name }}</h5>
                </a>
                <a href="/categories/{{ $product->category->code }}">
                    <p class="text-md font-medium tracking-tight text-gray-900 ">{{ $product->category->name }}</p>
                </a>
                
                <p class="text-lg font-bold text-green-500 mb-5 mt-1">{{ $product->price}}</p>
                    <a href="#" class="grid mx-9 text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">ADD TO CART</a>
            </div> 
         </div>
        @endforeach
      
</div>
@else
   <p class="text-center text-2xl mt-48 ml-10">Not Product Found</p> 
@endif


</section>

@endsection
@section('script')

@endsection