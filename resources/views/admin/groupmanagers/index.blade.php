@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
  <div class="ml-auto form-row">
    <div class="col-auto">
     <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStoreCategory">
        <i class="icon">add</i>
        <span class="text">Добавить категория магазина</span>
      </button>
    </div>
  </div>
</div>
    @if($managerCategories)
    <table class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th width="54px;">№</th>
          <th>Название</th>
        </tr>
      </thead>
      <tbody>
        @foreach($managerCategories as $managerCategorie)
        <tr data-id="{{ $managerCategorie->id }}" data-nameuz="{{ $managerCategorie->name_uz }}" data-nameru="{{ $managerCategorie->name_ru }}">
          <td>
            {{$managerCategorie->id}}
          </td>
          <td>
            <a class="text-green managergr_action" href="#" data-toggle="modal" data-target="#editCategory">{{$managerCategorie->name_ru}}</a>
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