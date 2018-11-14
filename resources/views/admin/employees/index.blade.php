@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
    <form class="form-row" method="GET">
        <div class="col-auto">
            <select name="manager" class="custom-select">
                <option value="all">Все магазины</option>
                @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <select class="custom-select" name="group">
                <option value="all">Все группы</option>
                @foreach($roles as $employeegroup)
                <option value="{{ $employeegroup->id }}">{{ $employeegroup->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <select class="custom-select" name="status">
                <option value="all">Все статуси</option>
                <option value="1">Активен</option>
                <option value="0">Неактивен</option>
            </select>
        </div>
    </form>
    <div class="ml-auto form-row">
        @include('admin.components.search')
        <div class="col-auto">
            <button class="btn btn-green" data-toggle="modal" data-target="#newEmployee">
                <i class="icon">add</i>
                <span class="text">Добавить сотрудника</span>
            </button>
        </div>
    </div>
</div>
@if(count($emoloyees) > 0)
<table class="table table-bordered table-hover table-stiped">
    <thead>
        <tr>
            <th width="54px;">№</th>
            <th>ФИО</th>
            <th width="154px;">Магазын</th>
            <th width="154px;">Группа</th>
            <th width="154px;">Телефон</th>
            <th width="154px;">Статус</th>
        </tr>
    </thead>
    <tbody class="emoloyees-table" data-count="{{ count($emoloyees) }}">
        @foreach($emoloyees as $employee)
        <tr data-id="{{ $employee->id }}" data-name="{{ $employee->name }}" data-manager="{{ $employee->manager_id }}"
            data-role="{{ $employee->role_id }}" data-mobile="{{ $employee->mobile }}" data-status="{{ $employee->status }}">
            <td>{{ $employee->id}}</td>
            <td><a href="#" class="text-green employee_action" data-toggle="modal" data-target="#editEmployee">{{
                    $employee->name}}</a></td>
            <td>{{ $employee->manager->name }}</td>
            <td>{{ $employee->role->name }}</td>
            <td>+998{{$employee->mobile}}</td>
            @if($employee->status == 1 )
            <td class="text-green status">Активен</td>
            @else
            <td class="text-warning status">Неактивен</td>
            @endif
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
    <i class="icon">group</i>
    <div class="text">Список пусто</div>
</div>
@endif
@include('admin.employees.add')
@endsection
