@extends('layouts.admin.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
    <h1 class="main-title">Список магазинов</h1>
    <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStore">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus"></use></svg>
      <span class="text">Добавить магазин</span>
    </button>
  </div>
  <div class="toolbar d-flex">
  <form method="GET">
    <div class="form-row">
      <div class="col-auto">
        <select class="custom-select" name="category" onchange="this.form.submit()">
          <option value="all">Все категории</option>
          @foreach($managerCategories as $managerCategory)
            <option value="{{$managerCategory->id}}" 
              @if(request()->get('category')==$managerCategory->id) selected 
              @endif>{{ $managerCategory->name_ru }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-auto">
        <select class="custom-select" name="status" onchange="this.form.submit()">
          <option value="all" @if(request()->get('status')=="all") selected @endif>Все статуси</option>
          <option value="1" @if(request()->get('status')=="1") selected @endif>Активен</option>
          <option value="0" @if(request()->get('status')=="0") selected @endif>Неактивен</option>
        </select>
      </div>
    </div>
    </form>
    @include('admin.components.search')
  </div>
  @if(count($managers) > 0)
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th class="col-auto">№</th>
        <th class="col-6">Название</th>
        <th class="col-3">Категория</th>
        <th class="col-auto"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($managers as $manager)
      <tr>
        <td data-logo="{{ $manager->logo }}">{{$manager->id}}</td>
        <td><a href="/" target="_blank">{{$manager->name}}</a></td>
        <td data-category="{{ $manager->manager_category_id }}" >{{$manager->managerCategory->name_ru}}</td>
        <td data-status="{{ $manager->status }}">
        <div class="btn-group btn-group-sm managers_action">
            <a href="{{ route('managers.edit',$manager->id) }}" data-toggle="modal" data-target="#editManager" class="btn btn-light">
              <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
            </a>
          </div>
        {!! Form::open(['method' => 'DELETE','route' => ['managers.destroy', $manager->id], 'class'=>'btn-group btn-group-sm delete']) !!}
        {!! Form::button('<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
        {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="main-bottom d-flex align-items-center"> 
    @if($managers->lastPage() > 1)
    {{ $managers->appends(request()->query())->links() }} 
    @else
      @include('admin.components.pagination')
    @endif
    <div class="main-bottom-info"> 
      {{$managers->lastItem()}} показано из {{$managers->total()}} результатов
    </div>
  </div>
  @include('admin.managers.edit')
  @else
  <div class="main-empty">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#store"></use></svg>
    <div class="text">Список пусто</div>
  </div>
  @endif
  @include('admin.managers.add')
  @endsection