<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('admin.layouts.inc.head')
</head>
<body>
<div class="app login">
  <form class="form-login" method="POST" action="{{ route('admin.login') }}" aria-label="Login">
  <div class="logo"></div>
  <h1 class="title">Личный кабинет</h1>
    <div class="card">
      <div class="card-body">
          @csrf
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">+998</span>
              </div>
              <input id="mobile" type="mobile" class="form-control {{ $errors->has('mobile') ? 'border-danger' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus placeholder="Телефон">
            </div>
            @if ($errors->has('mobile'))
            <span class="text-red">{{ $errors->first('mobile') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'border-danger' : '' }}" name="password" required placeholder="Пароль">
            @if ($errors->has('password'))
            <span class="text-red">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="custom-control-label" for="remember">Запомнить</label>
            </div>
          </div>
        <button class="btn btn-block btn-green" type="submit">Войты</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>