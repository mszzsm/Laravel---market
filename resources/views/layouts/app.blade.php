<!DOCTYPE html>
<html lang="en">
<head> <title>Farm to market</title></head>
<body>
    @if(count($errors) > 0)
        <ul>
            @foreach ($errors -> all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @yield('main')
</body>
</html>