@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
  <h1 class="main-title">Группа сотрудников</h1>
  <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newEmployeGroup">
    <i class="icon">add</i>
    <span class="text">Добавить группа сотрудников</span>
  </button>
</div>
<form method="GET">
  <div class="toolbar d-flex">
    <div class="form-row">
      <div class="col-auto">
        <select class="custom-select" name="manager" onchange="this.form.submit()">
          <option value="all">Все магазины</option>
          @foreach($managers as $manager)
          <option value="{{ $manager->id }}"
            @if(request()->get('manager') == $manager->id) selected
          @endif>{{ $manager->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
</form>
@if(count($roles) > 0)
<table class="table table-bordered table-hover table-striped">
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
        <td>{{ $employeegroup->manager->name}}</td>
      <td>
        <div class="btn-group btn-group-sm editEmployeGroup">
          <a href="{{ route('employees.group.edit',$employeegroup->id) }}" data-toggle="modal" data-target="#editEmployeGroup" class="btn btn-light" data="{{$employeegroup->id}}">
            <i class="icon">edit</i>
          </a>
        </div>
        {!! Form::open(['method' => 'DELETE','route' => ['employees.group.destroy', $employeegroup->id], 'class'=>'btn-group btn-group-sm delete']) !!}
        {!! Form::button('<i class="icon">delete</i>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
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
    <i class="icon">group</i>
    <div class="text">Список пусто</div>
  </div>
  @endif
@include('admin.employeesgr.add')
@include('admin.employeesgr.edit')
@endsection