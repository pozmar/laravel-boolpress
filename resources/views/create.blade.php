@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @method('post')
        <div class="mb-3">
          <label for="title" class="form-label">Titolo post</label>
          <input type="text" class="form-control" id="title" name="title">
         
        </div>
        <div class="mb-3">
            <label for="txtAreaS" class="form-label">Testo</label>
            <textarea class="form-control" id="description" name="description">
            </textarea>
        </div>
        <button type="submit" class="btn btn-dark">Pubblica</button>
@endsection