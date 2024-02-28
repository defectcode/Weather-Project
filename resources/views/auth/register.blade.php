@extends('layouts.app')

@section('content')
<h1>Register</h1>
<form method="POST" action="{{ route('weather.register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nume"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Parolă"><br>
    <input type="password" name="password_confirmation" placeholder="Confirmare parolă"><br>
    <button type="submit">Înregistrare</button>
</form>



<script src="{{ asset('resources/js/register.js') }}"></script>
@endsection