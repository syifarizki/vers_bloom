@extends('dashboard.layouts.main')

@section('container')
<div class=" sm:ml-64 border-b border-gray-200 my-12">
  <div class="flex justify-normal ">
    <a href="/dashboard/categories"  class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 
    focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 mt-10 ml-6 w-8 h-8">
      <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
      </svg>
    </a>
    <p class="text-3xl font-bold mt-8 mb-4 ml-3">Create New Category</p>
  </div>
  </div>

<form method="post" action="/dashboard/categories" class="max-w-2xl mt-10 sm:ml-64">
  @csrf
  <div class="mb-5 px-8">
      <label for="name" class="block mb-2 text-md font-bold text-gray-900 ">Category Name</label>
      <input type="text" id="name" name="name" class=" text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('name') bg-red-50 border border-red-500 @enderror" required autofocus value="{{ old('name')}}">
      @error('name')
      <div class="imt-2 text-sm text-red-600">
        {{ $message }}
      </div>
      @enderror
  </div>
  <div class="mb-5 px-8">
    <label for="code" class="block mb-2 text-md  font-bold text-gray-900 ">Code</label>
    <input type="text" id="code" name="code" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('code') bg-red-50 border border-red-500 @enderror " value="{{ old('code')}}" >
    @error('code')
    <div class="imt-2 text-sm text-red-600">
      {{ $message }}
    </div>
    @enderror
  </div>
<div class="mb-5 px-8">
<button type="submit" class="text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-bold rounded-lg text-md  px-5 py-2.5 me-2 mb-2   focus:outline-none ">Create New Category</button>
</div>
</form>


@endsection