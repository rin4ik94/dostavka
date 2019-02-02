@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
<form method="GET" class="form-row">
    <div class="col-auto">
      <select class="custom-select" name="manager" onchange="this.form.submit()">
        <option value="all">Все магазины</option>
         @foreach($managers as $manager)
          <option value="{{ $manager->id }}" @if(request()->get('manager') == $manager->id) selected @endif>{{ $manager->name }}</option>
         @endforeach
        </select>
     </div>
    </form>
    <div class="ml-auto form-row">
    <div class="col-auto">
    <button class="btn btn-green" data-toggle="modal" data-target="#newEmployeGroup">
      <i class="icon">add</i>
       <span class="text">Добавить группа сотрудников</span>
    </button>  
    </div>
  </div>
</div>
@if(count($roles) > 0)
<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th class="col-auto">№</th>
      <th class="col-6">Название</th>
      <th class="col-6">Магазин</th>
    </tr>
  </thead>
<tbody>
  @foreach($roles as $employeegroup)
    <tr>
      <td>{{ $employeegroup->id }}</td>
        <td><a class="text-green" href="#" data-toggle="modal" data-target="#editEmployeGroup" data="{{$employeegroup->id}}">{{ $employeegroup->name }}</a></td>
        <td>{{ $employeegroup->manager->name}}</td>
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