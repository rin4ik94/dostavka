@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
  <h1 class="main-title">Группа сотрудников</h1>
  <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newEmployeGroup">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus"></use></svg>
    <span class="text">Добавить группа сотрудников</span>
  </button>
</div>
@if($roles)
  <div class="toolbar d-flex">
    <div class="form-row">
      <div class="col-auto">
        <div class="dropdown dropdown-select">
          <button class="btn btn-light dropdown-toggle" data-name="manager" type="button" data-toggle="dropdown">
          Магазин
          </button>
          <ul class="dropdown-menu">
            <div class="dropdown-header">
              <input type="search" class="form-control filter" name="search">
            </div>
            <li class="dropdown-item" data-value="all">Магазин</li>
            @foreach($managers as $manager)
            <li class="dropdown-item" data-value="{{ $manager->id }}">{{ $manager->name }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th class="col-auto">№</th>
      <th class="col-6">Название</th>
      <th class="col-6">Магазин</th>
      <th class="col-auto"></th>
    </tr>
  </thead>
<tbody>
  @foreach($roles as $employeegroup)
    <tr>
      <td>{{ $employeegroup->id }}</td>
        <td><a href="/" target="_blank">{{ $employeegroup->name }}</a></td>
        <td>{{ $employeegroup->manager->name }}</td>
      <td>
        <div class="btn-group btn-group-sm editEmployeGroup">
          <a href="{{ route('employees.group.edit',$employeegroup->id) }}" data-toggle="modal" data-target="#editEmployeGroup" class="btn btn-light" data="{{$employeegroup->id}}">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
          </a>
        </div>
        {!! Form::open(['method' => 'DELETE','route' => ['employees.group.destroy', $employeegroup->id], 'class'=>'btn-group btn-group-sm delete']) !!}
        {!! Form::button('<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  <div class="main-bottom d-flex align-items-center"> 
    @if($roles->lastPage() > 1)
    {{ $roles->appends(request()->query())->links() }} 
    @else
      @include('admin.components.pagination')
    @endif
    <div class="main-bottom-info"> 
      {{$roles->lastItem()}} показано из {{$roles->total()}} результатов
    </div>
  </div>
  @else
  <div class="main-empty">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#store"></use></svg>
    <div class="text">Список пусто</div>
  </div>
  @endif
@include('admin.employeesgr.add')
@include('admin.employeesgr.edit')
@endsection