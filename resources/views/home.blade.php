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

                    <a href="" class="text-base font-medium text-black bg-[#94B49F] py-3 px-8 rounded-md 
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

{{-- Best Seller --}}
<section id="bestseller" class=" mt-20 w-screen h-screen bg-fixed -ml-5 -mb-20 p-10">
    <h3 class="font-bold  text-center text-4xl">Best Seller</h3>
    <div class="inline-flex px-6 ">
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-10 mx-6">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="/img/jumbotron.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Ariocarpus</h5>
                </a>
                <a href="#">
                    <p class="text-md font-medium tracking-tight text-gray-900 ">catogorie</p>
                </a>
                <div class="flex items-center justify-between mt-5">
                    <span class="text-lg font-bold text-green-500 ">Rp 300.000</span>
                    <a href="#" class=" text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">ADD TO CART</a>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-10 mx-6">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="/img/jumbotron.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Ariocarpus</h5>
                </a>
                <a href="#">
                    <p class="text-md font-medium tracking-tight text-gray-900 ">catogorie</p>
                </a>
                <div class="flex items-center justify-between mt-5">
                    <span class="text-lg font-bold text-green-500 ">Rp 300.000</span>
                    <a href="#" class=" text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">ADD TO CART</a>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-10 mx-6">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="/img/jumbotron.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Ariocarpus</h5>
                </a>
                <a href="#">
                    <p class="text-md font-medium tracking-tight text-gray-900 ">catogorie</p>
                </a>
                <div class="flex items-center justify-between mt-5">
                    <span class="text-lg font-bold text-green-500 ">Rp 300.000</span>
                    <a href="#" class=" text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">ADD TO CART</a>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-10 mx-6">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="/img/jumbotron.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Ariocarpus</h5>
                </a>
                <a href="#">
                    <p class="text-md font-medium tracking-tight text-gray-900 ">Category</p>
                </a>
                <div class="flex items-center justify-between mt-5">
                    <span class="text-lg font-bold text-green-500 ">Rp 300.000</span>
                    <a href="#" class=" text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 ease-in-out font-medium rounded-lg text-sm px-5 py-2.5 text-center">ADD TO CART</a>
                </div>
            </div>
        </div>
</div>
</section>
{{-- Best Seller End --}}
@endsection
