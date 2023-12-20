@extends('dashboard.layouts.main')

@section('container')
<div class=" sm:ml-64 border-b border-gray-200 my-12">
    <p class="text-3xl font-bold mt-5 px-8 py-8">Create New Products</p>
  </div>


<form method="post" action="dasboard/posts" class="max-w-2xl mt-10 sm:ml-64" enctype="multipart/form-data">
  <div class="mb-5 px-8">
      <label for="product-name" class="block mb-2 text-md font-bold text-gray-900 ">Product Name</label>
      <input type="text" id="product-name" name="product-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
  </div>
  <div class="mb-5 px-8">
    <label for="common-name" class="block mb-2 text-md  font-bold text-gray-900 ">Common Name</label>
    <input type="text" id="common-name" name="common-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
  </div>
  <div class="mb-5 px-8">
<label for="category" class="block mb-2 text-md  font-bold text-gray-900 ">Category</label>
<select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
  <option>Outdoor</option>
  <option>Indoor</option>
</select>
</div>
<div class="mb-5 px-8">
  <label for="price" class="block mb-2 text-md font-bold text-gray-900 ">Price</label>
  <input type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
</div>
<div class="mb-5 px-8">
<label class="block mb-2 text-md font-bold text-gray-900 " for="image">Post Image</label>
  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " aria-describedby="user_avatar_help" id="image" type="file">
</div>
<div class="mb-5 px-8">
  <label for="description" class="block mb-2 text-md  font-bold text-gray-900 ">Description</label>
  <input id="description"  type="hidden" name="description">
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