@extends('layouts.main')

@section('container')

<section class="flex justify-center ">

  <div class="w-full -mt-12 max-w-sm ml-44 p-4 bg-[#F8F3E7] border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">

  <form class="space-y-6" action="/register" method="post">
        @csrf
        <h5 class="text-center font-medium text-4xl text-gray-900" >Sign Up</h5>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 @error('firstname') is-invalid @enderror" placeholder="John" required autofocus>
            @error('name') 
            <div class="imt-2 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>
      
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email Address</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5  @error('email') is-invalid @enderror" placeholder="name@company.com" required>
          @error('email')
            <div class="imt-2 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
      </div>

      <div>
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " required>
          @error('password')
            <div class="imt-2 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
      </div>

      <button type="submit" class="w-56 text-black  ml-12 bg-[#94B49F] hover:opacity-95 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-base rounded-lg px-5 py-2.5 text-center">Sign Up</button>
      
      <button type="submit" class="w-56 text-black ml-12 border text-base border-black hover:bg-white focus:ring-4 focus:outline-none 
        focus:ring-blue-300 font-medium rounded-lg  px-5 py-2.5 text-center me-2 mb-2  "><svg class="w-6 h-6 inline-flex text-gray-800 pr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
          <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
          </svg> Sign Up with Google</button>

      <div class="text-sm font-medium text-gray-500  text-center">
        Already have an account? <a href="/login" class="text-black font-bold hover:underline ">Sign In</a>
      </div>
  </form>
</div>
</section>

@endsection