@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar d-flex">
    <form method="GET">
        <div class="form-row">
            <div class="col-auto">
                <select class="custom-select" name="region" onchange="this.form.submit()">
                    <option value="all">Все региони</option>
                    @foreach($regions as $region)
                    <option value="{{ $region->id }}" @if(request()->get('region') == $region->id) selected
                        @endif>{{ $region->name_uz }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto">
                <select class="custom-select" name="status" onchange="this.form.submit()">
                    <option value="all" @if(request()->get('status') == 'all') selected @endif>Все статуси</option>
                    <option value="1" @if(request()->get('status') == '1') selected @endif>Активен</option>
                    <option value="0" @if(request()->get('status') == '0') selected @endif>Неактивен</option>
                </select>
            </div>
            <div class="col-auto">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="clientBlacklist" name="blacklist" onchange="this.form.submit()"
                        @if(request()->has('blacklist'))
                    checked @endif>
                    <label class="custom-control-label" for="clientBlacklist">Черный список</label>
                </div>
            </div>
        </div>
    </form>
    @include('admin.components.search')
    <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStore">
        <i class="icon">add</i>
        <span class="text">Добавить клиент</span>
    </button>
</div>
@if(count($clients) > 0)
<table class="table table-bordered table-hover table-stiped">
    <thead>
        <tr>
            <th class="col-auto">№</th>
            <th class="col-4">ФИО</th>
            <th class="col-2">Регион</th>
            <th class="col-2">Телефон</th>
            <th class="col-2">Кол. заказов</th>
            <th class="col-auto"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr data-id="{{ $client->id }}" data-fname="{{ $client->first_name }}" data-lname="{{ $client->last_name }}"
            data-phone="{{ $client->phone }}" data-bdate={{ $client->birth_date }} data-jender="{{ $client->jender }}"
            data-status="{{ $client->status }}" data-region="{{ $client->region->id }}" data-blist="{{ $client->blacklist }}">
            <td>{{ $client->id }}</td>
            <td> {{ $client->first_name }} {{ $client->last_name }}</td>
            <td> {{ $client->region->name_ru }} </td>
            <td>+998{{ $client->phone }}</td>
            <td>{{ $client->birth_date }}</td>
            <td>
                <div class="btn-group btn-group-sm client_action">
                    <a href="#" data-toggle="modal" data-target="#editClient" class="btn btn-light">
                        <i class="icon">edit</i>
                    </a>
                </div>
                {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy',$client->id], 'class'=>'btn-group
                btn-group-sm delete']) !!}
                {!! Form::button('<i class="icon">delete</i>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <div class="main-bottom d-flex align-items-center">
        @if($clients->lastPage() > 1) {{ $clients->appends(request()->query())->links() }} @else
        @include('admin.components.pagination')
        @endif
        <div class="main-bottom-info">
            {{$clients->lastItem()}} показано из {{$clients->total()}} результатов
        </div>
    </div>
    @include('admin.clients.edit')
    @else
    <div class="main-empty">
        <i class="icon">wc</i>
        <div class="text">Список пусто</div>
    </div>
    @endif
    @include('admin.clients.add')
    @endsection