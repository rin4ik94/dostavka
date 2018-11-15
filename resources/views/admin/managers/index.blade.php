@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
  <form class="form-row" method="GET">
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
  </form>
  <div class="ml-auto form-row">
    @include('admin.components.search')
    <div class="col-auto">
     <button class="btn btn-green" data-toggle="modal" data-target="#newStore">
        <i class="icon">add</i>
        <span class="text">Добавить магазин</span>
      </button>
    </div>
  </div>
</div>
@if(count($managers) > 0)
<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th width="54px;">№</th>
      <th>Название</th>
      <th width="250px;">Категория</th>
    </tr>
  </thead>
  <tbody>
    @foreach($managers as $manager)
    <tr data-id="{{ $manager->id }}" data-name="{{ $manager->name }}" data-logo="{{ $manager->logo }}" data-category="{{ $manager->manager_category_id }}" data-status="{{ $manager->status }}">
      <td>{{$manager->id}}</td>
      <td><a class="text-green manager_action" href="#" data-toggle="modal" data-target="#editManager">{{$manager->name}}</a></td>
      <td>{{$manager->managerCategory->name_ru}}</td>
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
  <i class="icon">store</i>
  <div class="text">Список пусто</div>
</div>
@endif
@include('admin.managers.add')
@endsection