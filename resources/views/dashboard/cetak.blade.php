<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }} " >
    {{-- Tailwind --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
   
    <title>Products</title>
</head>
<body>
  <p class="text-center text-3xl mt-2 font-semibold mb-5">PRODUCTS</p>
  <section class="flex justify-center ">
    <table class="w-full items-center table-fixed text-sm text-left rtl:text-right text-gray-500 border-b-2 border-black">
      <thead class="text-xs text-gray-700 uppercase bg-gray-400 border-y ">
          <tr class="border-x">
              <th scope="col" class="px-6 py-3 border-x">
                 No
              </th>
              <th scope="col" class="px-6 py-3 border-x">
                  Product name
              </th>
              <th scope="col" class="px-6 py-3 border-x">
                  Category
              </th>
              <th scope="col" class="px-6 py-3 border-x ">
                Price
            </th>
          </tr>
      </thead>
      <tbody class="px-10 ">
        @foreach ($products as $product)
          <tr class="odd:bg-white even:bg-gray-50 border-x border-y">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrapborder-x ">
                {{ $loop->iteration }}
              </th>
              <td class="px-6 py-4 border-x border-y">
                {{ $product->product_name }}
              </td>
              <td class="px-6 py-4 border-y border-x">
                {{ $product->category->name }}
              </td>
              <td class="px-6 py-4 border-x border-y">
                {{ $product->price }}
            </td>
          </tr>
          
        @endforeach 
      </tbody>
  </table>
</section>  
  <script type="text/javascript">
    window.print();
  </script>
</body>
</html>
