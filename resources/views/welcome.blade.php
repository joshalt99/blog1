@extends('layouts.app')

@section('content')

    <div id="welcome">
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    ASC WEB DEV
                </div>

                <div class="links">
                    <a href="{{ url('/blog') }}">Blog's</a>
                    <a href="{{ url('/blog') }}">Login</a>
                    <a href="{{ url('/blog') }}">Register</a>


                </div>
            </div>
        </div>
    </div>


@endsection


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>