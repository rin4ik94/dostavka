@extends('layouts.admin.dashboard')
@section('content')
    <div class="main-top">
      <h1 class="main-title">Общие настройки</h1>
    </div>
    <div class="form-group form-row">
      <div class="col">
        <label class="form-label" for="">Название сайта</label>
      </div>
      <div class="col">
        <input class="form-control" type="text" value="Dostavka">
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col">
        <label class="form-label" for="">Выключить сайт</label>
      </div>
      <div class="col">
        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1"></label>
      </div>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col">
        <label class="form-label" for="">Причина отключения сайта</label>
      </div>
      <div class="col">
        <textarea class="form-control" rows="5">Сайт находится на текущей реконструкции, после завершения всех работ сайт будет открыт.
Приносим вам свои извинения за доставленные неудобства.</textarea>
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col">
        <label class="form-label" for="">Минималная сумма заказа</label>
      </div>
      <div class="col">
        <input class="form-control" type="text">
      </div>
    </div>
    <button class="btn btn-green">OK</button>
@endsection