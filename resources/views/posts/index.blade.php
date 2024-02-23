<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>PostsPage</h1>

    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>User</th>
        </tr>
        </thead>
       <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->user_id}}</td>
            </tr>
            @endforeach
       </tbody>




    </table>
</body>
</html>

