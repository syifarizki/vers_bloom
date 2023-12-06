@extends('layouts.main')

@section('container')

<!-- <div class="row justify-content-center"> -->

<section class="flex justify-center -mt-28 mb-20 ml-40 ">
<div class="w-full max-w-sm p-4 bg-[#F8F3E7] border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 ">
    <form class="space-y-6" action="#">
        <h5 class="text-center font-medium text-4xl text-gray-900">Sign Up</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
    
        <button type="submit" class="w-36 text-white  ml-20 bg-[#94B49F] hover:opacity-95 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-base rounded-lg px-5 py-2.5 text-center"> Sign Up</button>
        
    </form>
</div>
</section>

@endsection