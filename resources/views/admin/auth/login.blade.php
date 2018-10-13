<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{'Dostavka'}}</title>
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/css/grid.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="app">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form class="card form-signin" method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
        <div class="card-body">
            @csrf
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">+998</span>
                </div>
                <input id="mobile" type="mobile" class="form-control {{ $errors->has('mobile') ? 'border-danger' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus placeholder="{{ __('Mobile Number') }}">
              </div>
              @if ($errors->has('mobile'))
              <span class="text-red">{{ $errors->first('mobile') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'border-danger' : '' }}" name="password" required placeholder="{{ __('Password') }}">
              @if ($errors->has('password'))
              <span class="text-red">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
          <button class="btn btn-block btn-green" type="submit">{{ __('Login') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>