@extends('admin.layouts.dashboard')
@section('content')
<form action="/admin/settings/update" method="POST">
  @method('PATCH')
  @csrf
  <div class="form-group form-row">
    <label class="col-3 col-form-label" for="delivery_min_price">Сумма минимальгоно заказа</label>
    <div class="col-9">
    <input class="form-control" id="delivery_min_price" name="delivery_min_price" value="{{ $delivery_min_price ?? '' }}" type="text">
    </div>
  </div>
  <div class="form-row">
    <div class="col-9 offset-3">
      <button class="btn btn-green" type="submit">Сохранить</button>
    </div>
  </div>
</form>
@endsection