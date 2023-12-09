@extends('layouts.main')

@section('container')

<!-- <div class="row justify-content-center"> -->

<section class="flex justify-center -mt-28 mb-20 ml-40 ">
<div class="w-full max-w-sm p-4 bg-[#F8F3E7] border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 ">
    <form class="space-y-6" action="/register" method="post">
        @csrf
        <h5 class="text-center font-medium text-4xl text-gray-900" >Sign Up</h5>
        <div>
            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
            <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 @error('firstname') is-invalid @enderror" placeholder="John" required autofocus>
        </div>
        <div>
            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Example" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5" required>
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Johnexample@domain.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:[#94B49F] focus:border-[#94B49F] block w-full p-2.5" required>
        </div>
    
        <button type="submit" class="w-36 text-white  ml-20 bg-[#94B49F] hover:opacity-95 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-base rounded-lg px-5 py-2.5 text-center"> Sign Up</button>
        
    </form>
</div>
</section>

@endsection