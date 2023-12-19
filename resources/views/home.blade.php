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

{{-- about start --}}
<section id="about" class="pt-30 mt-16 mb-10">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">   
        <h1 class="text-3xl font-bold text-gray-950 text-center"> About Us </h1>
        <div class="flex flex-wrap">
            <div class="w-full self-center bg-zinc-50 shadow-lg mt-1 rounded-lg px-4 lg:w-1/2 md:ml-10 lg:ml-10">
                <p class="mt-6 mb-10 leading-relaxed"> Founded in 2023, at Vers Bloom we are committed to bringing beauty and joy into your life through the presence of enchanting flowers. Since our establishment, we have become a trusted destination for every floral need, delivering artistic arrangements that reflect the uniqueness of every moment.
                    <span> </span>
                    <span class="block mt-3"> Born out of love and admiration for the beauty of nature, Vers Bloom was born with the mission to be the link between the beauty of flowers and your heart. Every flower we offer is the intersection of superior quality, aesthetic design, and the love story you wish to express. </span>
            </div>
            <div class="w-full self-end px-4 lg:w-1/3">
                <div class="mt-10">
                     <div class="max-w-full mx-auto  w-screen h-96 lg:ml-36 bg-cover object-cover rounded-lg shadow-md " style="background-image: url(/img/about.jpg)"></div>
                </div>
            </div>
        </div>   
    </div>
</section>
@endsection
