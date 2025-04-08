@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Halo Admin, {{ Auth::user()->name }}!</h1>
    <p>Ini adalah dashboard untuk admin.</p>
</div>
@endsection
