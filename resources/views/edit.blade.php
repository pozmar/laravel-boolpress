@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
         
        </div>
        <div class="mb-3">
            <label for="txtAreaS" class="form-label">Testo</label>
            <textarea class="form-control" id="description" name="description">{{ $post->description }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-dark">Pubblica</button>
@endsection