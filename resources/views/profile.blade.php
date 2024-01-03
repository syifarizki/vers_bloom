@extends('layouts.main')

@section('container')
<section class="flex justify-center -mt-20 mb-10">
  <div class="w-full max-w-md ml-4 p-4 bg-[#94B49F] border border-gray-200 rounded-lg shadow md:ml-20 lg:ml-36">
  <h1 class="text-gray-600 font-bold text-center text-3xl mb-2">
          My Profile
        </h1>
  <form class="space-y-6 mb-4">
    @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="name" id="name" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " placeholder="" required autofocus value="{{auth()->user()->name }}">
            <div class="imt-2 text-sm text-red-600">
            </div>
        </div>
      
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email Address</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " placeholder="" required value="{{auth()->user()->email}}">
            <div class="imt-2 text-sm text-red-600">
            </div>
      </div>
  </form>
  <a href="/home">
  <button type="button" class="text-white bg-gray-600  hover:shadow-lg hover:opacity-95 transition duration-300  font-semibold rounded-full text-base px-5 py-2.5 text-center me-2 my-2 ">Back</button>
  </a>
</div>
</section>
@endsection