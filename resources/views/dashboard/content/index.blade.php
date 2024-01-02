@extends('dashboard.layouts.main')

@section('container')
    <div class="mx-24 mt-14">
        <div class="flex items-center py-10 mt-5 pl-10 sm:ml-64">
            <h1 class=" text-4xl  font-bold">Welcome , {{auth()->user()->name }}</h1>
        </div>
    </div>

    <div class="mt-10 rounded-xl">
        <div class="flex flex-wrap sm:ml-64 pl-10 pt-2 ">
            <div class="grid grid-cols-2 gap-8 ">
                <a href="/dashboard/posts">
                    <div class="rounded-md justify-center shadow-xl bg-gray-300">
                        <span class="text-2xl text-center font-semibold px-5 "> My Product</span>
                        <div class="flex justify-center">
                            <p class="pt-6 pl-20 font-bold text-2xl">{{ $products }}</p>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/categories">
                    <div class="rounded-md justify-center shadow-xl bg-gray-300 w-28">
                        <span class="text-2xl text-center font-semibold px-5"> Categories</span>
                        <div class="flex justify-center">
                            <p class="pt-6 pl-20  font-bold text-2xl ">{{ $categories }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection