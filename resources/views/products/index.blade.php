<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <title>Document</title>
</head>
<!-- Created A View -->

<body>
    <h1> Product List </h1>

    <div>
        <table>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> QTY </th>
                <th> Price </th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach($products as $product)
            <tr>
                <td> {{$product->id}}</td>
                <td> {{$product->name}}</td>
                <td> {{$product->qty}}</td>
                <td> {{$product->price}}</td>
                <td> {{$product->description}}</td>
                <td> <a href="{{route('product.edit', ['product' => $product])}}"> Edit</a></td>
                <td>
                    <form method = "post" action="{{route('product.destroy', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <a href="{{ route('product.create') }}">Create Product</a>
</body>

</html>