<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <!-- Load -->
    <div class="load-container">
        <div class="load">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Load -->
    <!-- Wrapper -->
    <div class="wrapper">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <h5 style="font-size: 16px;" class="card-title py-4">Login</h5>
                </div>
                <div class="card-body">
                   
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group input-custom">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email','admin@admin.com') }}" required autocomplete="email" autofocus placeholder="Email
                                ">
                                <i class="fas fa-envelope"></i>
                            @error('email')
                            <style>
                                i{
                                    visibility: hidden;
                                }
                            </style>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group input-custom">
                            <input id="password" type="password" value="123123"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Password">
                                <i class="fas fa-lock"></i>
                            @error('password')
                            <style>
                                i{
                                    visibility: hidden;
                                }
                            </style>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wrapper -->

    <!-- Scripts -->
    @include('admin.layouts.includes.scripts')
</body>
</html>