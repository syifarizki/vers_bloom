@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-primary bg-opacity-20 mx-24 mt-14 rounded-xl">
        <div class="flex items-center justify-between py-10 mt-5 px-10">
        </div>
    </div>

    <div class="bg-primary bg-opacity-20 mx-24 mt-5 rounded-xl">
        <div class="flex flex-wrap items-center justify-center pt-2 ">
            <div class="grid grid-cols-3 gap-5 px-10">
                <a href="/dashboard/posts">
                    <div class="rounded-xl justify-center border-primary border-opacity-50 shadow-xl">
                        <span class="text-xl text-center font-semibold pl-10 "> My Product</span>
                        <div class="flex justify-center">
                            <p class="pt-16 pl-20 font-bold text-xl">30</p>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/categories">
                    <div class="rounded-xl border-primary border-opacity-50 shadow-xl">
                        <span class="text-xl text-center font-semibold pl-10 "> Categories</span>
                        <div class="flex justify-center">
                            <p class="pt-16 pl-20  font-bold text-xl">30</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection