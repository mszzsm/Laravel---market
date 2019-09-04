<!DOCTYPE html>
<html lang="en">
<head> <title>Document</title></head>
<body>

    @extends('layouts.app')
    @section('main')
    <h1> {{ $markets->name }} </h1>

    <ul>
        <li>Location City: {{$market->city}}</li>
        <li>Website: {{$market->website}}</li>
    </ul>

    <form action="{{ route('markets.store')}}" method="post">
        {{csrf_field()}}
        <label for="name">Market Name</label>
        <input type="text" name="name">
        <label for="name">Market City</label>
        <input type="text" name="city">
        <label for="name">Market Website</label>
        <input type="text" name="website">
        <button type="submit">Create</button>
    </form>
    @endsection
    
</body>
</html>