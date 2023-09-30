<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>

</head>

<body>

    <h1>Create Products here</h1>
    <a href="{{ route('product.index') }}">Return Home</a>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" />
        </div>
        <div>
            <label for="qty">QTY</label>
            <input type="text" name="qty" id="qty" placeholder="qty" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Price" />
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description" />
        </div>

        <div>
            <input type="submit" value="Save a new product" />
        </div>
    </form>
</body>

</html>