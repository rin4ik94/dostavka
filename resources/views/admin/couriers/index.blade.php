@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
    <form class="form-row" method="GET">
        <div class="col-auto">
            <select class="custom-select" name="status" onchange="this.form.submit()">
                <option value="all" @if(request()->get('status')=="all") selected @endif>Все статуси</option>
                <option value="1" @if(request()->get('status')=="1") selected @endif>Активен</option>
                <option value="0" @if(request()->get('status')=="0") selected @endif>Неактивен</option>
            </select>
        </div>
    </form>
    <div class="ml-auto form-row">
        @include('admin.components.search')
        <div class="col-auto">
            <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newCourier">
                <i class="icon">add</i>
                <span class="text">Добавить курьер</span>
            </button>
        </div>
    </div>
</div>
@if(count($couriers) > 0)
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th width="54px;">№</th>
            <th>ФИО</th>
            <th width="250px;">Телефон</th>
            <th width="250px;">Статус</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($couriers as $courier)
        <tr data-id="{{ $courier->id }}" data-fio="{{ $courier->fio }}" data-mobile="{{ $courier->mobile }}"
            data-status="{{ $courier->status }}" data-pass="{{ $courier->password }}">
            <td>{{ $courier->id }}</td>
            <td><a href="#" class="text-green courier_action" data-toggle="modal" data-target="#editCourier">{{ $courier->fio }}</a></td>
            <td>+998{{ $courier->mobile }}</td>
            @if ($courier->status == '1')
            <td class="text-green">Активен</td>
            @else
            <td class="text-red">Неактивен</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
    @if($couriers->lastPage() > 1)
    {{ $couriers->appends(request()->query())->links() }}
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
    <i class="icon">local_shipping</i>
    <div class="text">Список пусто</div>
</div>
@endif
@include('admin.couriers.add')
@endsection
