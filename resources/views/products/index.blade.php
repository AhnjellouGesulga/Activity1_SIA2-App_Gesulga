<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Product List</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->price }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>