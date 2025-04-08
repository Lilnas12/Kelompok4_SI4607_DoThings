@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff;
        background-image: url('/images/top-hand.png'), url('/images/bottom-hand.png');
        background-position: top left, bottom right;
        background-repeat: no-repeat, no-repeat;
        background-size: 250px, 250px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
    }

    .login-container {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        text-align: center;
    }

    .login-container h3 {
        font-weight: 600;
        margin-bottom: 30px;
    }

    .form-control {
        border-radius: 8px;
        padding: 12px;
    }

    .btn-primary {
        background-color: #2563EB;
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-weight: 500;
    }

    .btn-primary:hover {
        background-color: #1D4ED8;
    }

    .text-small {
        font-size: 0.9rem;
    }

    .forgot-password {
        display: block;
        text-align: right;
        margin-bottom: 15px;
        font-size: 0.9rem;
    }

    .forgot-password a {
        color: #2563EB;
        text-decoration: none;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }

    .register-link {
        margin-top: 15px;
    }

    .register-link a {
        color: #2563EB;
        text-decoration: none;
    }

    .register-link a:hover {
        text-decoration: underline;
    }

    /* Responsive background images */
    @media (max-width: 768px) {
        body {
            background-size: 150px, 150px;
        }
    }
</style>

<div class="login-container">
    <h3>Login to your account</h3>

    @if ($errors->any())
        <div class="alert alert-danger text-start">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3 text-start">
            <label for="email" class="form-label text-small">Email</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter your email" value="{{ old('email') }}">
        </div>

        <div class="mb-3 text-start">
            <label for="password" class="form-label text-small">Password</label>
            <input type="password" name="password" class="form-control" required placeholder="Enter your password">
        </div>

        <div class="forgot-password">
            <a href="#">Forgot ?</a>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login now</button>

        <div class="register-link text-small">
            Don't Have An Account? <a href="#">Sign Up</a>
        </div>
    </form>
</div>
@endsection
