@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Deleted Blog Posts</h1>
            </div>
            <div class="col-sm-12 col-sm-offset-1">

                @foreach($deletedBlogs as $blog)

                    <artical>

                        <h2>{{ $blog->title }}  </h2>
                        <p> {{ $blog->body }}</p>
                        {!! Form::open(['method' => 'GET', 'action' => ['BlogController@restore', $blog->id]]) !!}

                            <div class="form-group">
                               {!! Form::submit("Restore Blog", ['class' => 'btn btn-primary']) !!}
                            </div>

                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroyBlog', $blog->id]]) !!}

                            <div class="form-group">
                                {!! Form::submit("Delete Blog for Good?", ['class' => 'btn btn-danger']) !!}
                            </div>

                        {!! Form::close() !!}

                    </artical>
                @endforeach
            </div>

        </div>

    </main>







@endsection