@extends('layouts.app')

@section('content')

    <main class="container-fluid">

        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Edit a category</h1>
            </div>
            <div class="col-sm-10 col-sm-offset-1">

                {{--update form--}}

                {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}

                <div class="form-group">

                    {!! Form::label("name", "Name:") !!}
                    {!! Form::text("name", null, ['class' => 'form-control'] ) !!}

                </div>

                <div class="form-group">

                    {!! Form::submit("Edit Category", ['class' => 'btn btn-primary']) !!}

                </div>

                {!! Form::close() !!}

                {{--delete form--}}

                {!! Form::open(['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}

                    {!! Form::submit("Delete category", ['class' => 'btn btn-danger']) !!}

                {!!  Form::close() !!}


            </div>

        </div>

    </main>







@endsection