@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
    <h1 class="main-title">Список курьеров</h1>
    <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStore">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg">
            <use xlink:href="#plus"></use>
        </svg>
        <span class="text">Добавить курьер</span>
    </button>
</div>
<div class="toolbar d-flex">
    <div class="form-row">
        <div class="col-auto">
            <select class="custom-select" name="status">
                <option value="all">Все статуси</option>
                <option value="1">Активен</option>
                <option value="0">Неактивен</option>
            </select>
        </div>
    </div>
    @include('admin.components.search')
</div>
@if(count($couriers) > 0)
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th class="col-auto">№</th>
            <th class="col-6">ФИО</th>
            <th class="col-2">Телефон</th>
            <th class="col-2">Статус</th>
            <th class="col-auto"></th>
        </tr>
    </thead>
    <tbody>
      @foreach ($couriers as $courier)
        <tr data-id="{{ $courier->id }}" data-fio="{{ $courier->fio }}" data-mobile="{{ $courier->mobile }}" data-status="{{ $courier->status }}"  data-pass="{{ $courier->password }}">
          <td>{{ $courier->id }}</td>
            <td> {{ $courier->fio }}</td>
            <td>+998{{ $courier->mobile }}</td>
              @if ($courier->status == '1')
                <td class="text-green">Активен</td>    
                @else
                <td class="text-red">Неактивен</td>
              @endif
            <td>
                <div class="btn-group btn-group-sm courier_action">
                    <a href="#" data-toggle="modal" data-target="#editCourier" class="btn btn-light">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
                    </a>
                  </div>
                  {!! Form::open(['method' => 'DELETE','route' => ['couriers.destroy',$courier->id], 'class'=>'btn-group btn-group-sm delete']) !!}
                  {!! Form::button('<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
                  {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
    @if($couriers->lastPage() > 1)
    {{ $couriers->links() }}
    @else
    @include('admin.components.pagination')
    @endif
    <div class="main-bottom-info">
        {{$couriers->lastItem()}} показано из {{$couriers->total()}} результатов
    </div>
</div>
@include('admin.couriers.edit')
@else
<div class="main-empty">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg">
        <use xlink:href="#store"></use>
    </svg>
    <div class="text">Список пусто</div>
</div>
@endif
@include('admin.couriers.add')
@endsection