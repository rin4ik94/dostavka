@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
    <form class="form-row" method="GET">
        <div class="col-auto">
            <select class="custom-select" name="region" onchange="this.form.submit()">
                <option value="all">Все региони</option>
                @foreach($regions as $region)
                <option value="{{ $region->id }}" @if(request()->get('region') == $region->id) selected @endif>{{
                    $region->name_uz }}</option>
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
    </form>
    <div class="form-row ml-auto">
      @include('admin.components.search')
      <div class="col-auto">
        <button class="btn btn-green" data-toggle="modal" data-target="#newStore">
          <i class="icon">add</i>
          <span class="text">Добавить клиент</span>
        </button>
      </div>
    </div>
</div>
@if(count($clients) > 0)
<table class="table table-bordered table-hover table-stiped">
    <thead>
        <tr>
            <th width="54px;">№</th>
            <th>ФИО</th>
            <th width="250px;">Регион</th>
            <th width="200px;">Телефон</th>
            <th width="150px;">Кол. заказов</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr data-id="{{ $client->id }}" data-fname="{{ $client->first_name }}" data-lname="{{ $client->last_name }}"
            data-phone="{{ $client->phone }}" data-bdate={{ $client->birth_date }} data-jender="{{ $client->jender }}"
            data-status="{{ $client->status }}" data-region="{{ $client->region->id or ''}}" data-blist="{{ $client->blacklist }}">
            <td>{{ $client->id }}</td>
            <td><a href="#" class="text-green client_action" data-toggle="modal" data-target="#editClient">{{ $client->getFullname() }}</a></td>
            <td>{{ $client->region->name_ru or ''}} </td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->orders_count}} раз(a)</td>
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
