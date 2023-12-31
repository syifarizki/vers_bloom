@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-20 mx-24 mt-14 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-5 px-10 sm:ml-64">
            <h1 class=" text-4xl  font-semibold">Welcome , {{auth()->user()->name }}</h1>
        </div>
    </div>

    <div class="bg-primary bg-opacity-20 mx-24 mt-10 rounded-xl">
        <div class="flex flex-wrap items-center justify-center pt-2 ">
            <div class="grid grid-cols-3 gap-5 px-10">
                <a href="/dashboard/posts">
                    <div class="rounded-xl justify-center border-primary border-opacity-50 shadow-xl bg-gray-400">
                        <span class="text-xl text-center font-semibold pl-3 "> My Product</span>
                        <div class="flex justify-center">
                            <p class="pt-16 pl-20 font-bold text-2xl -mt-5">{{ $products }}</p>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/categories">
                    <div class="rounded-xl border-primary border-opacity-50 shadow-xl bg-gray-400">
                        <span class="text-xl text-center font-semibold pl-10 pr-5"> Categories</span>
                        <div class="flex justify-center">
                            <p class="pt-16 pl-20  font-bold text-2xl -mt-5">{{ $categories }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection