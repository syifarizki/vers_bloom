<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }} " >
    <style>
        
    </style>
    <title>Document</title>
</head>
<body>
  <div class="form-group">
    <p align="center">TESTER</p>
      <table class="static" align="center" rules="all" border="1px" style="width:95%;">
      <tr>
        <th>NO</th>
        <th>PRODUCT NAME</th>
        <th>CATEGORY</th>
        <th>PRICE</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->price }}</td>
      </tr>
      @endforeach
      </table>
    </div>

  <script type="text/javascript">
    window.print();
  </script>
</body>
</html>