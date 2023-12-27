@extends('dashboard.layouts.main')

@section('container')
<div class=" sm:ml-64 border-b border-gray-200 my-12">
  <div class="flex justify-normal ">
    <a href="/dashboard/posts"  class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 
    focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 mt-10 ml-6 w-8 h-8">
      <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
      </svg>
    </a>
    <p class="text-3xl font-bold mt-8 mb-4 ml-3">Create New Product</p>
  </div>
  </div>


<form method="post" action="/dashboard/posts" class="max-w-2xl mt-10 sm:ml-64" enctype="multipart/form-data">
  @csrf
  <div class="mb-5 px-8">
      <label for="product_name" class="block mb-2 text-md font-bold text-gray-900 ">Product Name</label>
      <input type="text" id="product_name" name="product_name" class=" text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('product_name') bg-red-50 border border-red-500 @enderror" required autofocus value="{{ old('product_name')}}">
      @error('product_name')
      <div class="imt-2 text-sm text-red-600">
        {{ $message }}
      </div>
      @enderror
  </div>
  <div class="mb-5 px-8">
    <label for="common_name" class="block mb-2 text-md  font-bold text-gray-900 ">Common Name</label>
    <input type="text" id="common_name" name="common_name" class=" text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('common_name') bg-red-50 border border-red-500 @enderror "  value="{{ old('common_name')}}">
    @error('common_name')
    <div class="imt-2 text-sm text-red-600">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-5 px-8">
    <label for="code" class="block mb-2 text-md  font-bold text-gray-900 ">Code</label>
    <input type="text" id="code" name="code" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('code') bg-red-50 border border-red-500 @enderror " value="{{ old('code')}}" placeholder="TM-XXXXX">
    @error('code')
    <div class="imt-2 text-sm text-red-600">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-5 px-8">
<label for="category" class="block mb-2 text-md  font-bold text-gray-900 ">Category</label>
<select id="category" name="category_id" class=" text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
  @foreach ($categories as $category)
    @if (old('category_id') == $category->id)
    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>      
    @else
    <option value="{{ $category->id }}">{{ $category->name }}</option>    
    @endif
  
  @endforeach
</select>
</div>
<div class="mb-5 px-8">
  <label for="price" class="block mb-2 text-md font-bold text-gray-900 ">Price</label>
  <input type="text" id="price" name="price" class=" text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('price') bg-red-50 border border-red-500 @enderror " value="{{ old('price')}}" >
  @error('price')
  <div class="imt-2 text-sm text-red-600">
    {{ $message }}
  </div>
  @enderror
</div>
<div class="mb-5 px-8">
<label class="block mb-2 text-md font-bold text-gray-900 " for="image">Post Image</label>
  <input class="block w-full text-sm text-gray-900  rounded-lg cursor-pointer  focus:outline-none @error('image') bg-red-50 border border-red-500 @enderror" aria-describedby="user_avatar_help" id="image" name="image" type="file" >
  @error('image')
  <div class="imt-2 text-sm text-red-600">
    {{ $message }}
  </div>
  @enderror
</div>
<div class="mb-5 px-8">
  <label for="description" class="block mb-2 text-md  font-bold text-gray-900 ">Description</label>
  @error('description')
  <div class="imt-2 text-sm text-red-600 mb-2">
   <p>{{ $message }}</p> 
  </div>
  @enderror
  <input id="description"  type="hidden" name="description" value="{{ old('description') }}">
  <trix-editor input="description"></trix-editor>
</div>
<div class="mb-5 px-8">
<button type="submit" class="text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-bold rounded-lg text-md  px-5 py-2.5 me-2 mb-2   focus:outline-none ">Create New Product</button>
</div>
</form>


<script>

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>

@endsection