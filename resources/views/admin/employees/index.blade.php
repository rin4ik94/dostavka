@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
  <h1 class="main-title">Список сотрудников</h1>
  <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newEmployee">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus"></use></svg>
    <span class="text">Добавить сотрудника</span>
  </button>
</div>
@if($emoloyees)
<div class="toolbar d-flex">
<form method="GET">
  <div class="form-row">
    <div class="col-auto">
      <select name="manager" class="custom-select">
        <option value="all">Все магазины</option>
        <option value="2">Makro</option>
        <option value="1">Sunday</option>
      </select>
    </div>
    <div class="col-auto">
      <select class="custom-select" name="group">
        <option value="all">Все группы</option>
        <option value="1">Администратори</option>
        <option value="0">Менеджери</option>
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
  </form>
  @include('admin.components.search')
</div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th class="col-auto">№</th>
        <th class="col-6">ФИО</th>
        <th class="col-6">Магазын</th>
        <th class="col-2">Группа</th>
        <th class="col-2">Телефон</th>
        <th class="col-2">Статус</th>
        <th class="col-auto"></th>
      </tr>
    </thead>
    <tbody class="emoloyees-table" data-count="{{ count($emoloyees) }}">
      @foreach($emoloyees as $employee)
      <tr data-target="{{ $employee->id }}">
        <td data-id="{{ $employee->id }}">{{ $employee->id}}</td>
        <td data-name="{{ $employee->name }}">{{ $employee->name}}</td>
        <td data-mname="{{ $employee->manager_id }}">{{ $employee->manager->name }}</td>
        <td data-rname="{{ $employee->role_id }}" >{{ $employee->role->name }}</td>
        <td data-mobile="{{ $employee->mobile }}">+998{{$employee->mobile}}</td>
        @if($employee->status == 1 )
        <td class="text-green status" data-status="1" >Активен</td>
        @else
        <td class="text-warning status" data-status="0">Неактивен</td>
        @endif
        <td>
          <div class="btn-group btn-group-sm employee_actions">
            <a href="#" data-toggle="modal" data-target="#editEmployee" class="btn btn-light">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
            </a>
          </div>
          {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id], 'class'=>'btn-group btn-group-sm delete']) !!}
          {!! Form::button('<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="main-bottom d-flex align-items-center">
      @if($emoloyees->lastPage() > 1)
        {{ $emoloyees->appends(request()->query())->links() }}
      @else
        @include('admin.components.pagination')
      @endif
      <div class="main-bottom-info">
        {{$emoloyees->lastItem()}} показано из {{$emoloyees->total()}} результатов
      </div>
    </div>
    @include('admin.employees.edit')
    @else
    <div class="main-empty">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#store"></use></svg>
      <div class="text">Список пусто</div>
    </div>
  @endif
  @include('admin.employees.add')
@endsection