@extends('dashboard.layouts.main')

@section('container')
    <div class="mgrid gap-5 p-6 sm:grid-cols-2 xl:grid-cols-3">
        <!-- card2 -->
        <div class="mt-10 ml-5">
            <div class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl bg-blue-100 bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="-mx-3 flex flex-row">
                        <div class="w-2/3 max-w-full flex-none px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Category</p>
                                <h5 class="mb-0 font-bold">
                                    2,300
                                    <span class="font-weight-bolder text-sm leading-normal text-lime-500">+3%</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card2
        <div class="mb-6">
            <div class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl bg-blue-100 bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="-mx-3 flex flex-row">
                        <div class="w-2/3 max-w-full flex-none px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Category</p>
                                <h5 class="mb-0 font-bold">
                                    2,300
                                    <span class="font-weight-bolder text-sm leading-normal text-lime-500">+3%</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
@endsection



