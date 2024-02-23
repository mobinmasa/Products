<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatePost</title>
</head>
<body>

{{--    @if(session('errors'))--}}
{{--        {--}}
{{--        @dd(session('errors'))--}}
{{--        }--}}
{{--    @endif--}}

    <form action="{{route('posts.store')}}" method="post">
        @csrf

        <label for="title">Title</label>
        <br>
        <input value="{{ old('title') }}" type="text" id="title" name="Title" >
        <br>

        <label for="content">Content</label>
        <br>
        <textarea name="Content" id="content" cols="10" rows="5">{{ old('content') }}</textarea>
        <br>

        <label for="user_id">User</label>
        <br>
        <select name="User" id="user_id">
            <option disabled selected value="">
                select a user
            </option>
            @foreach($users as $user)
                <option value="{{$user->id}}">
                    {{$user->name}}
                </option>
            @endforeach
        </select>
        <br>
        <br>


        <br>
        <input type="submit" value="Create Post">

    </form>
</body>
</html>


