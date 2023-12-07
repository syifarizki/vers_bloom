@extends('layouts.main')

@section('container')

<section class="flex justify-center -mt-24 ">
<!-- @if(session()->has('success'));
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
</div>
@endif; -->

<div class="w-full max-w-sm ml-44 p-4 bg-[#F8F3E7] border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

  <form class="space-y-6" action="/login" method="post">
    @csrf
      <h5 class="text-4xl font-medium text-gray-900 text-center dark:text-white -mt-3">Sign in</h5>
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('email') is-invalid @enderror" placeholder="name@company.com" required autofocus>
          <!-- @error('email')
          <div class='invalid-feedback'>
            {{message}}
          </div>
          @enderror -->
      </div>
      <div>
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
      </div>
      <button type="submit" class="w-36 text-white  ml-20 bg-[#94B49F] hover:opacity-95 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-base rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign In</button>
      <div class="text-sm font-medium text-gray-500 dark:text-gray-300 text-center">
        Don't have account? <a href="/register" class="text-black font-bold hover:underline dark:text-blue-500">Sign Up</a>
      </div>
  </form>
</div>
</section>

@endsection