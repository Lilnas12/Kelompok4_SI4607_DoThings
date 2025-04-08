@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Selamat datang, {{ Auth::user()->name }}!</h1>
    <p>Ini adalah dashboard untuk pengguna biasa.</p>
</div>
@endsection
