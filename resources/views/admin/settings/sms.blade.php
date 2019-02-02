@extends('admin.layouts.dashboard')
@section('content')
<form action="/admin/settings/update" method="POST">
  @method('PATCH')
  @csrf
  <div class="form-group form-row">
    <label class="col-3 col-form-label" for="settings_sms_login">Авторизоваться</label>
    <div class="col-9">
      <input class="form-control" id="settings_sms_login" name="sms_login " value="youcloud" type="text">
    </div>
  </div>
    <div class="form-group form-row">
      <label class="col-3 col-form-label" for="settings_sms_password">Пароль</label>
      <div class="col-9">
        <input class="form-control" id="settings_sms_password" name="sms_password" value="y43ql9$9" type="text">
    </div>
  </div>
  <div class="form-row">
    <div class="col-9 offset-3">
      <button class="btn btn-green" type="submit">Сохранить</button>
    </div>
  </div>
</form>
@endsection