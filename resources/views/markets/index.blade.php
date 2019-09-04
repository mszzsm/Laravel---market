<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('layouts.app')
    @section('main')
    <ul>
        @foreach($markets as $market)
            <li>
                <a href="{{ route('markets.show', $market) }}">
                        {{ $market->name }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $markets-> links()}}
    @endsection
</body>
</html>