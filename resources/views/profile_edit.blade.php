@extends('layouts.main')

@section('container')
<section class="flex justify-center -mt-20 mb-10">
  <div class="w-full max-w-md ml-4 p-4 bg-[#94B49F] border border-gray-200 rounded-lg shadow md:ml-20 lg:ml-36">
    <div class="flex justify-normal ">
      <a href="/profile"  class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 
      focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 mt-10 ml-6 w-8 h-8">
        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
        </svg>
      </a>
      <p class="text-3xl font-bold mt-8 mb-4 ml-3">Edit Profile</p>
    </div>
  <form class="space-y-6 mb-4" method="post" action="/profile/{{ $user->id }}">
    @method('put')
    @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="name" id="name" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " autofocus value="{{ old('name', $user->name) }}">
            <div class="imt-2 text-sm text-red-600">
            </div>
        </div>
      
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email Address</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-300 focus:border-[#94B49F] block w-full p-2.5 " value="{{ old('email', $u) }}">
            <div class="imt-2 text-sm text-red-600">
            </div>
      </div>
      <div class="mb-5 px-8">
        <button type="submit" class="text-white bg-gray-600  hover:shadow-lg hover:opacity-95 transition duration-300  font-semibold rounded-full text-base px-5 py-2.5 text-center me-2 my-2 -ml-8 ">Save Changes</button>
    </div>
  </form>
  
</div>
</section>
@endsection