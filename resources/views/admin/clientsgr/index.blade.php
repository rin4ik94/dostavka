@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
  <h1 class="main-title">Группа клиентов</h1>
  <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newClientGr">
    <i class="icon">add</i>
    <span class="text">Добавить</span>
  </button>
</div>
@if(count($clientgroups) > 0)
<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th class="col-auto">№</th>
        <th class="col">Группа</th>
        <th class="col-auto"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($clientgroups as $clientgroup)
      <tr>
          <td>{{ $clientgroup->id }}</td>
          <td>{{ $clientgroup->name }}</td>
          <td>
          <div class="btn-group btn-group-sm clientgr_action">
            <a href="#" data-toggle="modal" data-target="#editClientGr" class="btn btn-light">
            <i class="icon">edit</i>
            </a>
          </div>
          {!! Form::open(['method' => 'DELETE','route' => ['clients.group.destroy',$clientgroup->id], 'class'=>'btn-group btn-group-sm delete']) !!}
          {!! Form::button('<i class="icon">delete</i>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="main-bottom d-flex align-items-center">
      @if($clientgroups->lastPage() > 1)
        {{ $clientgroups->appends(request()->query())->links() }}
      @else
        @include('admin.components.pagination')
      @endif
      <div class="main-bottom-info">
        {{$clientgroups->lastItem()}} показано из {{$clientgroups->total()}} результатов
      </div>
    </div>
    @include('admin.clientsgr.edit')
    @else
    <div class="main-empty">
      <i class="icon">wc</i>
      <div class="text">Список пусто</div>
    </div>
    @endif
  @include('admin.clientsgr.add')
@endsection