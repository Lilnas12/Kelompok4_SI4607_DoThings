@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-white">
    <div class="position-absolute top-0 start-0">
        <img src="{{ asset('images/hand-top.png') }}" alt="hand top" style="width: 180px;">
    </div>
    <div class="position-absolute bottom-0 end-0">
        <img src="{{ asset('images/hand-bottom.png') }}" alt="hand bottom" style="width: 180px;">
    </div>

    <div class="card shadow p-4 border-0 rounded-4" style="max-width: 400px; width: 100%; z-index: 1;">
        <div class="text-end">
            <h4 class="fw-bold mb-0">DO</h4>
            <h4 class="text-primary fw-bold">THINGS</h4>
        </div>

        <h5 class="text-center my-4">Login to your account</h5>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="text-end">
                    <a href="{{ route('password.request') }}" class="small text-decoration-none">Forgot?</a>
                </div>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Login now</button>
            </div>

            <p class="text-center small mb-0">
                Don’t Have An Account? <a href="{{ route('register') }}">Sign Up</a>
            </p>
        </form>
    </div>
</div>
@endsection
