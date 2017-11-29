@extends('layouts.app')

@section('content')

<main class="container">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Latest Blog Posts</h1>
        </div>
        <div class="col-sm-12 col-sm-offset-1">

        @foreach($blogs as $blog)

            <artical>

                <h2> {{ $blog->title }} </h2>
                <p> {{ $blog->body }}</p>

            </artical>
        @endforeach
        </div>

    </div>

</main>







@endsection