@extends('dashboard.layouts.main')

@section('container')
<div class=" sm:ml-64 border-b border-gray-200 mt-14 pt-8 mb-5 flex justify-between">
  <p class="text-4xl font-bold px-8 py-8">Product Categories</p>
<form class="mt-3 mr-3">   
  <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
  <div class="relative ">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
      </div>
      <input type="search" id="default-search" class="block w-80 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-neutral-50 focus:border-neutral-50 " placeholder="Search..." required>
      <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-neutral-50 font-medium rounded-lg text-sm px-4 py-2 ">
        Search</button>
  </div>
</form>
</div>


@if (session()->has('success'))
    <div id="alert-3" class="flex sm:ml-64 items-center p-4 mb-4 ml-32 text-green-800 rounded-lg bg-green-50 " role="alert">
        <div class="ms-3 text-sm font-medium">
          {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8   " data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
@endif


<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5 sm:ml-64 px-8 pt-5 -mt-5  ">
  <div class="flex justify-start">
    {{-- create --}}
  <a href="/dashboard/categories/create" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 
  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4">Create New Category</a>

  {{-- pdf --}}
  <a href="{{route ('PdfReporting') }}" target="_blank"   class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300
    font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4 ">
    <div class="flex justify-between">
    <svg class="w-4 h-4 mb-2 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 18a.969.969 0 0 0 .933 1h12.134A.97.97 0 0 0 15 18M1 7V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v5M6 1v4a1 1 0 0 1-1 1H1m0 9v-5h1.5a1.5 1.5 0 1 1 0 3H1m12 2v-5h2m-2 3h2m-8-3v5h1.375A1.626 1.626 0 0 0 10 13.375v-1.75A1.626 1.626 0 0 0 8.375 10H7Z"/>
    </svg> PDF Report</div>
  </a>
  
    {{-- sort --}}
    <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-green-700
     hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg 
     text-sm px-5 py-2.5 text-center inline-flex items-center mb-4" type="button">Sort by
       <svg class="w-2.5 h-2.5 ms-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
    </a>
      
      <!-- Dropdown menu -->
      <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
          <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2  hover:bg-gray-100  ">A to Z</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Z to A </a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Latest Product </a>
            </li>
          </ul>
      </div>
  
    </div> 

    <table class="w-full mt-6  items-center table-fixed text-sm text-left rtl:text-right text-gray-500  ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-400 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                   No
                </th>
                <th scope="col" class="px-6 py-3">
                    Category Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Code
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr class="odd:bg-white even:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                  {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
                  {{ $category->name }}
                </td>
                <td class="px-6 py-4">
                  {{ $category->code }}
                </td>
                <td class="px-6 py-4 flex justify-start">
                    <a href="/dashboard/categories/{{$category->code}}/edit"  class="text-white bg-yellow-300  focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-2 me-2 mb-2">
                        <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1v3m5-3v3m5-3v3M1 7h7m1.506 3.429 2.065 2.065M19 7h-2M2 3h16a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm6 13H6v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L8 16Z"/>
                        </svg>
                      </a>
                          <a href="#" class="text-white bg-red-300  focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 me-2 mb-2">
                            <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                          </a>
                </td>
            </tr>
            
          @endforeach 
        </tbody>
    </table>
</div>
S

@endsection