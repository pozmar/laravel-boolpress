@extends('layouts.app')
@section('content')

@if(isset($user))
  <h1>Ciao {{ $user->name}}</h1>
@else
  <h1>Ciao utente</h1>
@endif
@endsection