@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
	<h1 class="main-title">Список клиентов</h1>
	<button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStore">
		<i class="icon">add</i>
		<span class="text">Добавить клиент</span>
	</button>
</div>
<div class="toolbar d-flex">
  <div class="form-row">
    <div class="col-auto">
      <select class="custom-select" name="group">
        <option value="all">Все группы</option>
        <option value="1">Обычный покупатель</option>
        <option value="2">Постоянный покупатель</option>
      </select>
    </div>
    <div class="col-auto">
      <select class="custom-select" name="group">
        <option value="all">Все региони</option>
        @foreach($regions as $region)
        <option value="{{ $region->id }}">{{ $region->name_uz }}</option>
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
    </div>
	@include('admin.components.search')
</div>
<table class="table table-bordered table-hover table-stiped">
  <thead>
    <tr>
      <th class="col-auto">№</th>
      <th class="col-4">ФИО</th>
      <th class="col-2">Группа</th>
      <th class="col-2">Регион</th>
      <th class="col-2">Телефон</th>
      <th class="col-2">Кол. заказов</th>
      <th class="col-auto"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clients as $client)
    <tr data-id="{{ $client->id }}" data-fname="{{ $client->first_name }}" data-lname="{{ $client->last_name }}" data-mobile="{{ $client->mobile }}" 
      data-bdate={{ $client->birth_date }} data-jender="{{ $client->jender }}" data-status="{{ $client->status }}" data-group="{{ $client->client_group->id }}" 
      data-region="{{ $client->region->id }}">
      <td>{{ $client->id }}</td>
      <td> {{ $client->first_name }} {{ $client->last_name }}</td>
      <td>{{ $client->client_group->name }}</td>
      <td> {{ $client->region->name_ru }} </td>
      <td>+998{{ $client->mobile }}</td>
      <td>{{ $client->birth_date }}</td>
      <td>
      <div class="btn-group btn-group-sm client_action">
        <a href="#" data-toggle="modal" data-target="#editClient" class="btn btn-light">
        <i class="icon">edit</i>
        </a>
      </div>
      {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy',1], 'class'=>'btn-group btn-group-sm delete']) !!}
      {!! Form::button('<i class="icon">delete</i>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
      {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
  @include('admin.components.pagination')
  @include('admin.clients.add')
	@include('admin.clients.edit')
  <div class="main-bottom-info">20 показано из 45 результатов</div>
</div>
@endsection