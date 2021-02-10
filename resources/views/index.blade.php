@extends('layouts.app')
@section('content')
<h1>Post</h1>
<ul>
@foreach($posts as $post)
<li><strong>
{{ $post->title}} </strong> <br>
{{ $post->description }}
</li>
<br>
@endforeach
</ul>
@endsection