@extends('admin.layouts.dashboard')
@section('content')

<div class="toolbar">
  <form class="form-row" method="GET">
    <div class="col-auto">
      <select class="custom-select" name="section">
        <option value="1" selected>По магазинам</option>
        <option value="2">По филиалам</option>
        <option value="3">По заказам</option>
        <option value="4">По курьерам</option>
      </select>
    </div>

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
      <th width="250px">№ магазина</th>
      <th>Названия магазина</th>
      <th width="250px">Количество заказов</th>
      <th width="250px">Сумма покупки</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>10</td>
      <td>Makro</td>
      <td>15</td>
      <td>250 000 сум</td>
    </tr>
  </tbody>
</table>
<div class="main-bottom d-flex align-items-center"> 
  <div class="main-bottom-info"> 
    <strong>Итого: 250 сум</strong>
  </div>
</div>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th width="250px">№ филиала</th>
      <th>Названия филиала</th>
      <th width="250px">Количество заказов</th>
      <th width="250px">Сумма покупки</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>10</td>
      <td>Makro Фергана Сайлгох</td>
      <td>15</td>
      <td>250 000 сум</td>
    </tr>
  </tbody>
</table>
<div class="main-bottom d-flex align-items-center"> 
  <div class="main-bottom-info"> 
    <strong>Итого: 250 сум</strong>
  </div>
</div>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th width="250px">Статус заказа</th>
      <th>Количество заказов</th>
      <th width="250px">Сумма заказов</th>
      <th width="250px">Сумма доставки</th>
      <th width="250px">Обшая сумма</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Новый</td>
      <td>11</td>
      <td>15 000 cум</td>
      <td>250 000 сум</td>
      <td>250 000 сум</td>
    </tr>
  </tbody>
</table>



<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th width="250px">№ курьера</th>
      <th>ФИО</th>
      <th width="250px">Количество заказов</th>
      <th width="250px">Сумма доставки</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>10</td>
      <td>Robbie Mohr</td>
      <td>15</td>
      <td>250 000 сум</td>
    </tr>
  </tbody>
</table>
<div class="main-bottom d-flex align-items-center"> 
  <div class="main-bottom-info"> 
    <strong>Итого: 250 сум</strong>
  </div>
</div>



@endsection