@extends('dashboard.layouts.main')

@section('container')
<div class=" sm:ml-64 border-b border-gray-200 mt-5 pt-8 mb-5 flex justify-between">
  <p class="text-4xl font-bold px-8 py-8">My Products</p>
  <form class="mt-8 mr-3" id="searchForm" action="/dashboard/posts" method="get">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
    <div class="relative ">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" name="query" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50" placeholder="Search...." value="{{ old('query', request('query')) }}" >
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
  <a href="/dashboard/posts/create" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 
  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4">Create New Product</a>

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
      <!-- <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="" onclick="handleSort('price_low_high')" class="block px-4 py-2 hover:bg-gray-100">
                    <div class="flex justify-between">Price Low-High</div>
                </a>
            </li>
            <li>
                <a href="" onclick="handleSort('price_high_low')" class="block px-4 py-2 hover:bg-gray-100">
                    <div class="flex justify-between">Price High-Low</div>
                </a>
            </li>
            <li>
                <a href="" onclick="handleSort('latest')" class="block px-4 py-2 hover:bg-gray-100">
                    <div class="flex justify-between">Latest Product</div>
                </a>
            </li>
        </ul>
      </div> -->
      <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
          <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="{{ route('posts.index', ['sort_by' => 'price_low_high']) }}" class="block px-4 py-2 hover:bg-gray-100 {{ request('sort_by') == 'price_low_high' ? 'active' : '' }} " data-sort="price_low_high"> 
                <div class="flex justify-between">
                   Price Low-High
                </div>
              </a>
            </li>
            <li>
              <a href="{{ route('posts.index', ['sort_by' => 'price_high_low']) }}" class="block px-4 py-2 hover:bg-gray-100 {{ request('sort_by') == 'price_high_low' ? 'active' : '' }}" data-sort="price_high_low"  > 
                <div class="flex justify-between">
                   Price High-Low
                </div>
              </a>
            </li>
            <li>
              <a href="{{ route('posts.index', ['sort_by' => 'latest']) }}" class="block px-4 py-2 hover:bg-gray-100  {{ request('sort_by') == 'latest' ? 'active' : '' }} " data-sort="latest"> 
                <div class="flex justify-between">
                   Latest Product
                </div>
              </a>
            </li>
          </ul>
      </div>
    
      {{-- filter --}}
      
      <div class="relative">
      <form id="categoryForm" action="{{ route('dashboard.posts.index') }}" method="GET">
        @csrf
        <label for="filterSelect" class="sr-only">Filter by:</label>
        <select id="filterSelect" name="category_id" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center mb-4 ml-3" onchange="this.form.submit()">
            <option value="">Filter By Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
      </form>
    </div>
    </div>
    {{-- <!-- <div class="relative">
    <form id="categoryForm" action="{{ route('dashboard.posts.index') }}" method="GET">
        @csrf
        <label for="filterSelect" class="sr-only">Filter by:</label>
        <select id="filterSelect" name="category_id" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center mb-4 ml-3" onchange="handleFilterChange()">
            <option value="">Filter By Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form> 
    </div>
  </div> --> --}}



    <table id="filteredResultsContainer" class="w-full mt-6  items-center table-fixed text-sm text-left rtl:text-right text-gray-500 border-b-2 border-black ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-400 ">
            <tr class="border-x">
                <th scope="col" class="px-6 py-3 border-x">
                   No
                </th>
                <th scope="col" class="px-6 py-3 border-x">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3 border-x">
                    Category
                </th>
                <th scope="col" class="px-6 py-3 border-x">
                  Price
              </th>
                <th scope="col" class="px-6 py-3 border-x">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @if (count($products) > 0)
          @foreach ($products as $product)
            <tr class="odd:bg-white even:bg-gray-50 border-x border-y">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border-x border-y">
                  {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4 border-x border-y">
                  {{ $product->product_name }}
                </td>
                <td class="px-6 py-4 border-x border-y">
                  {{ $product->category->name }}
                </td>
                <td class="px-6 py-4 border-x border-y">
                  {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}
              </td>
                <td class="px-6 py-4 flex justify-start">
                          <a href="/dashboard/posts/{{ $product->id}}" class="text-white bg-blue-300  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 me-2 mb-2 ">
                            <svg class="w-4 h-4 text-gray-800  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                              <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                              </g>
                            </svg>
                          </a>
                          <a href="{{ route('dashboard.products.edit', ['product' => $product->id]) }}" class="text-white bg-yellow-300 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-2 me-2 mb-2">
                            <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1v3m5-3v3m5-3v3M1 7h7m1.506 3.429 2.065 2.065M19 7h-2M2 3h16a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm6 13H6v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L8 16Z"/>
                            </svg>
                          </a>
                          <form action="/dashboard/posts/{{ $product->id}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="text-white bg-red-300  focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 me-2 mb-2" onclick="return confirm('Are you sure?')">
                              <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                              </svg>
                            </button>
                          </form>
                </td>
            </tr>
          @endforeach 
          @else
            <tr>
                <td colspan="5" class="px-6 py-4 text-gray-500 text-center">
                    No products found for your search.
                </td>
            </tr>
          @endif
        </tbody>
    </table>
    <!-- <script>
        $(document).ready(function() {
        $('.dropdown-sort a').click(function() {
            $('.dropdown-sort a').removeClass('active');
            $(this).addClass('active');
            handleSortChange($(this).data('sort'));
        });
        });
    </script>
    <script>
        function handleFilterChange() {
            var selectedCategory = $('#filterSelect').val();
            var selectedSort = $('.dropdown-sort a.active').data('sort'); 
            window.location.href = '{{ route("posts.index") }}' + '?sort_by=' + selectedSort + '&category_id=' + selectedCategory;
            $.ajax({
              url: '/dashboard/products',
                type: 'GET',
                data: { category_id: selectedCategory },
                success: function(response) {
                  console.log(response);
                  $('#filteredResultsContainer tbody').html(response);
                },
                error: function(xhr) {
                }
            });
        }
    </script> -->
    <!-- <script>
    function handleSort(sortType) {
    const url = new URL(window.location.href);
        url.searchParams.delete('sort_by');
        if (sortType) {
            url.searchParams.set('sort_by', sortType);
        }
        history.replaceState({}, '', url.toString());
        updateTableWithSort(sortType);
    }

        function updateTableWithSort(sortType) {
        $.ajax({
            url: '/posts/sortPost',
            type: 'GET',
            data: { sort_by: sortType },
            success: function(response) {
                updateTable(response);
            },
            error: function(xhr) {
            }
        });
    }

    function updateTable(data) {
      $('#productTable tbody').empty();
      $('#productTable tbody').html(data);
    }
</script> -->
</div>



@endsection