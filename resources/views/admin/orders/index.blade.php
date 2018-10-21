@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar d-flex">
      <div class="form-row">
        <div class="col-auto">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-green active">
              <input type="radio" name="options" id="option0" autocomplete="off" checked>Все<span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option1" autocomplete="off">Новый<span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option2" autocomplete="off">Формируется<span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option3" autocomplete="off">В пути<span class="badge">4</span>
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
      @include('admin.components.search')
      </div>
    </div>
    @if(count($orders) > 0)
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
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr data-id="{{ $order->id }}" 
          data-mname="{{ $order->manager->name }}" 
          data-bname="{{ $order->branch->name ?? '' }}" 
          data-cname="{{ $order->client->getFullname() }}"
          data-cmobile="{{ $order->client->mobile }}" 
          data-status="{{  $order->order_status_id }}" 
          data-ostreet="{{  $order->delivery_address_street }}" 
          data-ohome="{{  $order->delivery_address_home }}" 
          data-ofloor="{{  $order->delivery_address_floor }}" 
          data-oapartment="{{  $order->delivery_address_apartment }}" 
          data-oremark="{{  $order->delivery_address_remark }}" 
          data-odeliver="5000" 
          data-payment="{{ $order->payment->name_ru}}" 
          data-oprice="{{$order->order_price}}"
          data-tprice="{{$order->total_price}}"
        >
      <td><a class="text-red" href="#" data-toggle="modal" data-target="#Order">{{ $order->id }}</a></td>
        <td>{{ $order->getTime()}}</td>
        <td>{{ $order->manager->name }}</td>
        @if($order->branch_id != '')
        <td><a class="text-green order_branch" href="#" data-toggle="modal" data-target="#orderBranch" data-branch="{{ $order->branch_id }}">{{ $order->branch->name }}</a></td>
        @else
          <td><a class="text-red order_branch" href="#" data-toggle="modal" data-target="#orderBranch" data-branch="{{ $order->branch_id }}">Выбрать</a></td>
        @endif
        <td><a class="text-green order_client" href="#" data-toggle="modal" data-target="#Client" data-clientId="{{ $order->client_id }}">{{ $order->client->getFullname() }}</a></td>
        <td>{{ $order->delivery_address_street }}</td>
         @if($order->courier_id != '')
      <td><a class="text-green order_courier" href="#" data-toggle="modal" data-target="#orderCourier" data-courier="{{ $order->courier_id }}">{{ $order->courier->fio }}</a></td>
          @else
          <td><a class="text-red order_courier" href="#" data-toggle="modal" data-target="#orderCourier" data-courier="0">{{  __('Назначить') }}</a></td>
        @endif
        <td>{{ $order->total_price }}</td>
        <td>{{ $order->payment->name_ru }}</td>
        <td><a class="{{ $order->status->color }} order_status" href="#" data-toggle="modal" data-target="#orderStatus">{{ $order->status->name }}</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="main-bottom d-flex align-items-center"> 
      @if($orders->lastPage() > 1)
      {{ $orders->appends(request()->query())->links() }} 
      @else
        @include('admin.components.pagination')
      @endif
      <div class="main-bottom-info"> 
        {{$orders->lastItem()}} показано из {{$orders->total()}} результатов
      </div>
    </div>
    @include('admin.orders.order')
    @include('admin.orders.branch')
    @include('admin.orders.courier')
    @include('admin.orders.status')
    @include('admin.orders.client')
  @else
  <div class="main-empty">
      <i class="icon">notifications</i>
      <div class="text">Список пусто</div>
  </div>
  @endif
@endsection