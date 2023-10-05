<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todolist</title>
</head>
<body>
    <h1>Todolist</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>

            @foreach($todolists as $task)
            <tr>
                <td> {{$task->id}}</td>
                <td> {{$task->title}}</td>
                <td> {{$task->content}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>