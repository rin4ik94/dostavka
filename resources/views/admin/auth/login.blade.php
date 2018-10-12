<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{'Dostavka'}} </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    html, body, .app { margin: 0; padding: 0; }
    .app {max-width: 800px; width: 100%; height: 100%; margin: 100px auto; padding: 32px;}
    </style>
</head>
<body>
<div class="app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dostavka Admin Panel') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="mobile" class="col-sm-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control {{ $errors->has('mobile') ? 'border-danger' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>
                                @if ($errors->has('mobile'))
                                    <h6><span class="text-red">{{ $errors->first('mobile') }}</span></h6>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'border-danger' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-red">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>