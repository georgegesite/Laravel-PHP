<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <div>
        <h1>Create a new task</h1>
    </div>
    <div>
        <form action="{{route('todolist.store')}}" method="post">
            @csrf
            <label for="">Title</label>
            <input type="text" name="title"  id="title" placeholder="Title">
            <label for="">Content</label>
            <input type="text" name="content"  id="content" placeholder="Content">
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>