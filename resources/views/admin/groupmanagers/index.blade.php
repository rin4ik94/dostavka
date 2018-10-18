@extends('admin.layouts.dashboard')
@section('content')
 <div class="main-top d-flex align-items-center">
      <h1 class="main-title">Категории магазинов</h1>
      <button class="btn btn-green ml-auto" 
      data-toggle="modal" data-target="#newStoreCategory">
        <i class="icon">add</i>
        <span class="text">Добавить категория магазина</span>
      </button>
    </div>
    @if($managerCategories)
    <table class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th class="col-auto">№</th>
          <th class="col-12">Название</th>
          <th class="col-auto"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($managerCategories as $managerCategorie)
        <tr>
          <td>{{$managerCategorie->id}}</td>
          <td data-nameUz="{{ $managerCategorie->name_uz }}"><a href="#">{{$managerCategorie->name_ru}}</a></td>
          <td>
            <div class="btn-group btn-group-sm managergr_actions">
              <a href="#" data-toggle="modal" data-target="#editCategory" id="groupManagerEdit" class="btn btn-light">
                <i class="icon">edit</i>
              </a>
          </div>
        {!! Form::open(['method' => 'DELETE','route' => ['managers.group.destroy', $managerCategorie->id], 'class'=>'btn-group btn-group-sm delete']) !!}
        {!! Form::button('<i class="icon">delete</i>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
        {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="main-bottom d-flex align-items-center">
      @if($managerCategories->lastPage() > 1)
        {{ $managerCategories->appends(request()->query())->links() }} 
      @else
        @include('admin.components.pagination')
      @endif
    <div class="main-bottom-info"> 
      {{$managerCategories->lastItem()}} показано из {{$managerCategories->total()}} результатов
    </div>
  </div>
    @include('admin.groupmanagers.edit')
    @else
    <div class="main-empty">
      <i class="icon">store</i>
      <div class="text">Список пусто</div>
    </div>
    @endif
    @include('admin.groupmanagers.add')
@endsection