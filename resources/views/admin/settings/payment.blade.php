@extends('admin.layouts.dashboard')
@section('content')
<form action="/admin/settings/update" method="POST">
  @method('PATCH')
  @csrf
  <div class="form-group form-row">
    <label class="col-3" for="settings_delivery_price">Наличными</label>
    <div class="col-9">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="payment_type_1" name="payment_type_1" checked>
        <label class="custom-control-label" for="payment_type_1"></label>
      </div>
    </div>
  </div>
  <div class="form-group form-row">
    <label class="col-3" for="settings_delivery_price">Click</label>
    <div class="col-9">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="payment_type_2" name="payment_type_2">
        <label class="custom-control-label" for="payment_type_2"></label>
      </div>
    </div>
  </div>
  <div class="form-group form-row">
    <div class="col-9 offset-3">
      <input class="form-control" type="text" placeholder="Merchand ID">
    </div>
  </div>
  <div class="form-group form-row">
    <label class="col-3" for="settings_delivery_price">Payme</label>
    <div class="col-9">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="payment_type_3" name="payment_type_3">
        <label class="custom-control-label" for="payment_type_3"></label>
      </div>
    </div>
  </div>
  <div class="form-group form-row">
    <div class="col-9 offset-3">
      <input class="form-control" type="text" placeholder="Merchand ID">
    </div>
  </div>
  <div class="form-row">
    <div class="col-9 offset-3">
      <button class="btn btn-green" type="submit">Сохранить</button>
    </div>
  </div>
</form>
@endsection