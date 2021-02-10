@extends('layouts.app')
@section('content')
<h2>{{ $post->title }}</h2>
<h4>{{ $post->description }}</h4>
<a href="{{ route('posts.index') }}">Torna ai post</a>
@endsection