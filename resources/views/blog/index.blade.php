<h1>Latest Blog Posts</h1>

<hr>

@foreach($blogs as $blog)

    <h2> {{ $blog->title }} </h2>

    <p> {{ $blog->body }}</p>

@endforeach