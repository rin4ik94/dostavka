@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar d-flex">
      <div class="form-row">
        <div class="col-auto">
          <div class="dropdown dropdown-select">
            <button class="btn btn-light dropdown-toggle" data-name="region" type="button" data-toggle="dropdown">
            Все регионы
            </button>
            <ul class="dropdown-menu">
              <div class="dropdown-header">
                <input type="search" class="form-control filter" name="search">
              </div>
              <li class="dropdown-item" data-value="all">Все регионы</li>
              <li class="dropdown-item" data-value="1">Фергана</li>
              <li class="dropdown-item" data-value="2">Андиджан</li>
            </ul>
          </div>
        </div>
        <div class="col-auto">
          <div class="dropdown dropdown-select">
            <button class="btn btn-light dropdown-toggle" data-name="category" type="button" data-toggle="dropdown">
            Все категории
            </button>
            <ul class="dropdown-menu">
              <div class="dropdown-header">
                <input type="search" class="form-control filter" name="search">
              </div>
              <li class="dropdown-item" data-value="all">Все категории</li>
              <li class="dropdown-item" data-value="1">Супермаркети</li>
              <li class="dropdown-item" data-value="2">Алкомаркет</li>
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
        <th class="col-2">Дата и время</th>
        <th class="col-2">Магазин</th>
        <th class="col-2">Адрес доставки</th>
        <th class="col-2">Клент</th>
        <th class="col-2">Сумма</th>
        <th class="col-2">Тип</th>
        <th class="col-2">Статус</th>
        <th class="col-auto"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td>Фергана</td>
        <td>Супермаркети</td>
        <td>Супермаркети</td>
        <td>Супермаркети</td>
        <td class="text-green">В пути</td>
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