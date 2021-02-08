@extends('layouts.app')
@section('content')
<div class="guest">
<h3>
@guest
  Ciao utente non identificato!
@else
  {{ $user->name }}
@guest
</h3>

</div>
@endsection