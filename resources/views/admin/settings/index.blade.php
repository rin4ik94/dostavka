@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top">
  <h1 class="main-title">Общие настройки</h1>
</div>
<form class="needs-validation" novalidate>
  <div class="form-group form-row">
    <div class="col-3 col-form-label">
      <label class="form-label" for="">Название сайта</label>
    </div>
    <div class="col-9">
      <input class="form-control" type="text"  required>
    </div>
  </div>
  <div class="form-group form-row">
    <div class="col-3 col-form-label">
      <label class="form-label" for="">Выключить сайт</label>
    </div>
    <div class="col-9">
      <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1"></label>
    </div>
    </div>
  </div>
  <div class="form-group form-row">
    <div class="col-3 col-form-label">
      <label class="form-label" for="">Причина отключения сайта</label>
    </div>
    <div class="col-9">
      <textarea class="form-control" rows="5">Сайт находится на текущей реконструкции, после завершения всех работ сайт будет открыт.
  Приносим вам свои извинения за доставленные неудобства.</textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="col-9 offset-3">
      <button class="btn btn-green" type="submit">Сохранить</button>
    </div>
  </div>
</form>

@endsection