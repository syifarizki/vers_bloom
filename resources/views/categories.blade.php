@extends('layouts.main')

@section('container')
<section id="product" class="-mt-40 w-screen -ml-5 mr-10 h-full p-10 mb-10 md:mb-10 md:-ml-10 lg:mb-10 ">
    <h3 class="font-bold text-left ml-10 text-4xl">Product Categories</h3>
    

      <form action="{{ route('categories') }}" method="get">
        <div class="relative mt-5 ml-10 mr-10">
            <input type="search" name="query" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50" placeholder="Search...." value="{{ old('query', request('query')) }}" >
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#94B49F] hover:bg-slate-200 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
    </form>



    <div class=" px-6 grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4  ">
      @foreach ($categories as $category)
        <div class="w-full max-w-sm  bg-white border border-gray-200 rounded-lg shadow mt-10 mx-6">
            <a href="/categories/{{ $category->code }}">
                <img class="p-8 rounded-t-lg" src="https://source.unsplash.com/500x400?{{ $category->name }}" alt="{{ $category->name }}" />
            </a>
            <div class="px-5 pb-5">
                <a href="/categories/{{ $category->code }}">
                    <p class="text-md font-medium tracking-tight text-gray-900 ">{{ $category->name }}</p>
                </a>
                
            </div> 
         </div>

        @endforeach
      
</div>


</section>





@endsection