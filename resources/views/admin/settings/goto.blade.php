@extends('admin.layouts.dashboard')
@section('content')
<form action="/admin/settings/update" method="POST">
  @method('PATCH')
  @csrf
  <div class="form-group form-row">
    <label class="col-3 col-form-label" for="settings_delivery_price">Цена доставки</label>
    <div class="col-9">
    <input class="form-control" id="settings_delivery_price" name="delivery_price" value="{{ $delivery_price ?? '' }}" type="text">
    </div>
  </div>
  <div class="form-group form-row">
    <label class="col-3 col-form-label" for="delivery_free_price">Бесплатная доставка</label>
    <div class="col-9">
    <input class="form-control" id="delivery_free_price" name="delivery_free_price" value="{{ $delivery_free_price ?? ''}}" type="text">
    </div>
  </div>
  <div class="form-row">
    <div class="col-9 offset-3">
      <button class="btn btn-green" type="submit">Сохранить</button>
    </div>
  </div>
</form>
@endsection