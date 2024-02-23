<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
</head>
<body>
<h1>TagsPage</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tags as $tag)
              <tr>
                  <td>{{$tag->name}}</td>
              </tr>
            @endforeach


        </tbody>
    </table>

</body>
</html>
