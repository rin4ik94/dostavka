@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top">
  <h1 class="main-title">Настройки доставка</h1>
</div>
<form>
  <div class="form-group form-row">
    <label class="col-3 col-form-label" for="settings_delivery_price">Цена доставки</label>
    <div class="col-9">
      <input class="form-control" id="settings_delivery_price" name="settings_delivery_price" value="5000" type="text">
    </div>
  </div>
  <div class="form-row">
    <div class="col-9 offset-3">
      <button class="btn btn-green" type="submit">Сохранить</button>
    </div>
  </div>
</form>
@endsection