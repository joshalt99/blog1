@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <article>
                <div class="jumbotron">
                    <h1>{{ $blog->title }}<a style="float: right;" href=" {{ action('BlogController@edit', [$blog->id]) }} ">Edit</a></h1>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <p> {{ $blog->body }}</p>

                    @foreach($blog->category as $category)
                        <p><a href="{{ route('categories.show', $category->slug)  }}">{{ $category->name  }}</a></p>
                    @endforeach

                </div>
            </article>
        </div>

    </main>







@endsection