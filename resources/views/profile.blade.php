@extends('layouts.main')

@section('container')
<section class="flex justify-center -mt-20 mb-10">
  <div class="w-full max-w-md ml-4 p-4 bg-[#94B49F] border border-gray-200 rounded-lg shadow md:ml-20 lg:ml-36">
  <h1 class="text-gray-600 font-bold text-center text-3xl mb-2">
          My Profile
        </h1>
  <div class=" mb-2 items-center gap-4">
      <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
      class="w-32 ml-36 shadow-xl group-hover:w-36 group-hover:h-36 h-32 object-center items-center object-cover rounded-full transition-all duration-500 delay-500 transform"/>
      <div class="w-fit transition-all transform duration-500">
      </div>
    </div>
  <form class="space-y-6 mb-4">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="name" id="name" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " placeholder="" required autofocus>
            <div class="imt-2 text-sm text-red-600">
            </div>
        </div>
      
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email Address</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " placeholder="" required>
            <div class="imt-2 text-sm text-red-600">
            </div>
      </div>

      <div class="mb-10">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " required>
            <div class="imt-2 text-sm text-red-600">
            </div>
      </div>
  </form>
  <a href="#">
  <button type="button" class="text-black bg-gray-600  hover:shadow-lg hover:opacity-95 transition duration-300  font-semibold rounded-full text-base px-5 py-2.5 text-center me-2 my-2 ">Edit Profile</button>
  </a>
</div>
</section>
@endsection