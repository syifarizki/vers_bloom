@extends('layouts.main')

@section('container')
<div class="flex justify-center">
    <p class="text-5xl font-bold -mt-24 mb-4 px-8 md:ml-32">Your Cart</p>
</div>

@if (session()->has('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4 ml-32 text-green-800 rounded-lg bg-green-50" role="alert">
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
@endif

<div class="relative overflow-x-auto shadow-md rounded-lg ml-8 md:ml-32">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 sm:-ml-5">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-16 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3 text-sm">
                    Product
                </th>
                <th scope="col" class="px-6 py-3 text-sm">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3 text-sm">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 text-sm">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $details)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="p-4">
                        @if ($details->image && Storage::exists('public/product-images/' . $details->image))
                            <img class="p-8 rounded-t-lg" src="{{ asset('storage/product-images/' . $details->image) }}" alt="Product Image">
                        @else
                            <img src="{{ $details['product']['image'] }}" class="w-16 md:w-32 max-w-full max-h-full" alt="Product Image">
                        @endif
                    </td>                   
                                      
                    <td class="px-6 py-4 font-semibold text-gray-900 text-base">
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('cart.updateQuantity', ['productId' => $details['product_id']]) }}" method="post" class="max-w-xs mx-auto">
                            @csrf
                            <div class="relative flex items-center">
                                <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                                <input type="text" name="quantity" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="{{ $details['quantity'] }}" required>
                                <input type="hidden" name="productId" value="{{ $details['product_id'] }}">
                                <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 6h16"/>
                                    </svg>
                                </button>
                            </div>
                            <button type="submit" class="mt-2 text-xs text-gray-700 hover:underline focus:outline-none focus:ring focus:ring-gray-100">
                                Update
                            </button>
                        </form>
                        
                        
                    </td>
                    <td class="px-6 py-4">
                        {{ $details['product']['price'] }}
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('cart.remove', ['productId' => $details['product_id']]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-xs text-red-600 hover:underline focus:outline-none focus:ring focus:ring-red-100" onclick="return confirm('Are you sure?')">
                                Remove
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection