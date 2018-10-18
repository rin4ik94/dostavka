@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar d-flex">
      <div class="form-row">
        <div class="col-auto">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-green active">
              <input type="radio" name="options" id="option1" autocomplete="off" checked>Новый <span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option2" autocomplete="off">Формируется <span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option3" autocomplete="off">В пути <span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option4" autocomplete="off">Доставлен
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option5" autocomplete="off">Отменен
            </label>
          </div>
        </div>
        <div class="col-auto">
          <input class="form-control" type="date" value="2018-10-13">
        </div>
      </div>
      @include('admin.components.search')
    </div>
    <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th class="col-auto">№</th>
        <th class="col-2">Поступил</th>
        <th class="col-2">Магазин</th>
        <th class="col-2">Филиал</th>
        <th class="col-2">Клент</th>
        <th class="col-2">Адрес доставки</th>
        
        <th class="col-2">Курьер</th>
        <th class="col-2">Сумма</th>
        <th class="col-2">Оплата</th>
        
        <th class="col-2">Статус</th>
        <th class="col-auto"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>4721</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td><a class="text-green" href="#" data-toggle="modal" data-target="#orderBranch">Выбрать</a></td>
        <td>Абдулла</td>
        <td>г.Фергана ул.Сфйлгох</td>
        
        <td><a class="text-red" href="#" data-toggle="modal" data-target="#orderCourier">Назначить</a></td>
        <td>50 000</td>
        <td>Наличными</td>
        <td><a class="badge badge-primary" href="#" data-toggle="modal" data-target="#orderStatus">Новый</a></td>
        <td>
          <button class="btn btn-sm btn-light" type="button" data-toggle="modal" data-target="#editOrder">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>2358</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td><a class="text-green" href="#" data-toggle="modal" data-target="#orderBranch">Выбрать</a></td>
        <td>Абдулла</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td><a class="text-red" href="#" data-toggle="modal" data-target="#orderCourier">Назначить</a></td>
        <td>50 000</td>
        <td>Наличными</td>
        <td><a class="badge badge-secondary" href="#" data-toggle="modal" data-target="#orderStatus">Формируется</a></td>
        <td>
          <button class="btn btn-sm btn-light" type="button" data-toggle="modal" data-target="#editOrder">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>0147</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td><a class="text-green" href="#" data-toggle="modal" data-target="#orderBranch">Тест</a></td>
        <td>Абдулла</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td><a class="text-red" href="#" data-toggle="modal" data-target="#orderCourier">Абдулла</a></td>
        <td>50 000</td>
        <td>Наличными</td>
        <td><a class="badge badge-warning" href="#" data-toggle="modal" data-target="#orderStatus">В пути</a></td>
        <td>
          <button class="btn btn-sm btn-light" type="button" data-toggle="modal" data-target="#editOrder">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>6332</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td><a class="text-green" href="#" data-toggle="modal" data-target="#orderBranch">Тест</a></td>
        <td>Абдулла</td>
        <td>г.Фергана ул.Сфйлгох</td>
        
        <td><a class="text-red" href="#" data-toggle="modal" data-target="#orderCourier">Илхом</a></td>
        <td>50 000</td>
        <td>Наличными</td>
        <td><a class="badge badge-success" href="#" data-toggle="modal" data-target="#orderStatus">Доставлен</a></td>
        <td>
          <button class="btn btn-sm btn-light" type="button" data-toggle="modal" data-target="#editOrder">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>7446</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td><a class="text-green" href="#" data-toggle="modal" data-target="#orderBranch">Тест</a></td>
        <td>Абдулла</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td><a class="text-red" href="#" data-toggle="modal" data-target="#orderCourier">Елдор</a></td>
        <td>50 000</td>
        <td>Наличными</td>
        <td><a class="badge badge-red" href="#" data-toggle="modal" data-target="#orderStatus">Отменен</a></td>
        <td>
          <button class="btn btn-sm btn-light" type="button" data-toggle="modal" data-target="#editOrder">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="main-bottom d-flex align-items-center">
      @include('admin.components.pagination')
      <div class="main-bottom-info">20 показано из 45 результатов</div>
  </div>
@include('admin.orders.edit')
@include('admin.orders.branch')
@include('admin.orders.courier')
@include('admin.orders.status')
@endsection