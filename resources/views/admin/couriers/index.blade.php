@extends('layouts.admin.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
	<h1 class="main-title">Список курьеров</h1>
	<button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStore">
		<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus"></use></svg>
		<span class="text">Добавить магазин</span>
	</button>
</div>
<div class="toolbar d-flex">
	<div class="form-row">
		<div class="col-auto">
			<select class="custom-select" name="group">
				<option value="all">Все группи</option>
				<option value="1">Администратори</option>
				<option value="2">Менеджери</option>
			</select>
		</div>
		<div class="col-auto">
			<select class="custom-select" name="status">
				<option value="all">Все статуси</option>
				<option value="1">Активен</option>
				<option value="2">Неактивен</option>
			</select>
		</div>
	</div>
	@include('admin.components.search')
</div>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th class="col-auto">№</th>
      <th class="col-6">ФИО</th>
      <th class="col-2">Телефон</th>
      <th class="col-2">Номер ТС</th>
      <th class="col-2">Статус</th>
      <th class="col-auto"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Холматов Джалолиддин Рахматжон угли</td>
      <td>+998916720193</td>
      <td>40A777AA</td>
      <td class="text-green">Активен</td>
      <td>
        <form class="btn-group btn-group-sm" role="group">
          <button class="btn btn-light" type="submit">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
          </button>
          <button class="btn btn-light" type="submit">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>
          </button>
        </form>
      </td>
    </tr>
  </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
	 @include('admin.components.pagination')
	<div class="main-bottom-info">20 показано из 45 результатов</div>
</div>
  @include('admin.couriers.add')
@endsection