@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
  <form class="form-row" method="GET">
    <div class="col-auto">
      <input class="form-control" type="date" value="2018-11-08" name="of_date">
    </div>
    <div class="col-auto">
      <div class="input-group">
        <input class="form-control" type="date" value="2018-11-09" name="to_date">
      </div>
    </div>
  </form>
</div>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th width="100px">№</th>
      <th>№ заказа</th>
      <th width="200px">Тип оплаты</th>
      <th width="200px">Клент</th>
      <th width="200px">Сумма</th>
    </tr>
  </thead>
</table>
@endsection