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
      <div class="dropdown dropdown-select">
        <button class="btn btn-light dropdown-toggle" data-name="group" type="button" data-toggle="dropdown">
        Все группы
        </button>
        <ul class="dropdown-menu">
          <div class="dropdown-header">
            <input type="search" class="form-control filter" name="search">
          </div>
          <li class="dropdown-item" data-value="all">Все группы</li>
          <li class="dropdown-item" data-value="1">Администратори</li>
          <li class="dropdown-item" data-value="2">Менеджери</li>
        </ul>
      </div>
    </div>
    <div class="col-auto">
      <div class="dropdown dropdown-select">
        <button class="btn btn-light dropdown-toggle" data-name="status" type="button" data-toggle="dropdown">
        Все статусы
        </button>
        <ul class="dropdown-menu">
          <div class="dropdown-header">
            <input type="search" class="form-control filter" name="search">
          </div>
          <li class="dropdown-item" data-value="all">Все статусы</li>
          <li class="dropdown-item" data-value="1">Активен</li>
          <li class="dropdown-item" data-value="0">Неактивен</li>
        </ul>
      </div>
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
@endsection