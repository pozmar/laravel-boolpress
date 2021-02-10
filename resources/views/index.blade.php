@extends('layouts.app')
@section('content')
<h1>Post</h1>
<ul>
@foreach($posts as $post)
<li><strong>
{{ $post->title}} </strong> <br>
{{ $post->description }}
</li>
<a href="{{ route('posts.show', $post->id) }}">Vai al post</a>
<br>
<a href="{{ route('posts.edit', $post->id) }}"> Aggiorna il post</a>

<br>
@endforeach
</ul>

@endsection