@extends('layouts.app')
@section('content')
<h2>{{ $post->title }}</h2>
<h4>{{ $post->description }}</h4>
@auth
<form action="{{ route('posts.destroy', $post->id) }}" method="post">
     @csrf
      @method('delete')
    
        <button class="btn btn-danger">Elimina Post</button>
</form>
@endauth
<a href="{{ route('posts.index') }}">Torna ai post</a>
@endsection