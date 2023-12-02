@extends('layouts.main')

@section('container')
{{-- Jumbotron --}}
<section id="home" class="pt-30  ">
    <div class="containers -mt-36">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2 md:ml-14 lg:ml-20">
                <h1 class="font-medium  text-5xl md:text-6xl lg:text-7xl">Welcome to <span class="block font-medium text-5xl md:text-6xl lg:text-7xl">Our Garden</span></h1>
                <p class="mt-5 mb-10 leading-relaxed">Here, we bring you our exclusive collection of plants, from easy-care to rare houseplants.
                    <span class="block"> Get special offers and free shipping on select orders. </span>
                    <span class="block">Make your dream green home a reality by shopping now!</span></p>

                    <a href="" class="text-base font-semibold text-white bg-[#94B49F] py-3 px-8 rounded-md 
                    hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out">SHOP NOW</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/3">
                <div class="mt-10">
                     <div class="rounded-full max-w-full mx-auto shadow-xl w-96 h-96 lg:ml-36 bg-cover" style="background-image: url(/img/jumbotron.png)"></div>
                </div>
            </div>
        </div>   
    </div>
</section> 
{{-- Jumbotron end --}}
@endsection
