@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Admin Control Panel</h1>
            </div>
            <div class="col-sm-8 col-sm-offset-2">

                <button class="btn btn-primary link"><a style="color: #FFFFFF;" href="{{ url('/blog/create') }}">Create Blog Post</a></button>
                <button class="btn btn-danger link"><a style="color: #FFFFFF;" href="{{ url('/blog/bin') }}">Trashed Blog Post</a></button>


            </div>

        </div>

    </main>







@endsection