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
