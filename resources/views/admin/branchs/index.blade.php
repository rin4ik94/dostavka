@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
  <form class="form-row" method="GET">
    <div class="col-auto">
      <select class="custom-select" name="manager" onchange="this.form.submit()">
        <option value="all">Все магазины</option>
        @foreach($managers as $manager)
        <option value="{{ $manager->id }}" @if(request()->get('manager') == $manager->id) selected @endif>{{ $manager->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-auto">
      <select class="custom-select" name="region" onchange="this.form.submit()">
        <option value="all">Все региони</option>
        @foreach($regions as $region)
        <option value="{{ $region->id }}" @if(request()->get('region') == $region->id) selected @endif>{{ $region->name_ru }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-auto">
      <select class="custom-select" name="status" onchange="this.form.submit()">
        <option value="all">Все статуси</option>
        <option value="1" @if(request()->get('status') == '1') selected @endif>Активен</option>
        <option value="0" @if(request()->get('status') == '0') selected @endif>Неактивен</option>
      </select>
    </div>
  </form>
  <div class="ml-auto form-row">
    <div class="col-auto">
      @include('admin.components.search')
    </div>
    <div class="col-auto">
      <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStore">
		<i class="icon">add</i>
		<span class="text">Добавить филиал</span>
	 </button>
    </div>
  </div>
</div>
@if(count($branches) > 0)
<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>№</th>
      <th>Название</th>
      <th>Магазин</th>
      <th>Регион</th>
      <th>Адрес</th>
    </tr>
  </thead>
  <tbody>
    @foreach($branches as $branch)
    <tr>
      <td>{{ $branch->id }}</td>
      <td><a class="text-green" href="#" data-toggle="modal" data-target="#editBranch">{{ $branch->name }}</a></td>
      <td>{{ $branch->manager->name }}</td>
      <td>{{ $branch->region->name_ru }}</td>
      <td>{{ $branch->address }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
    @if($branches->lastPage() > 1)
      {{ $branches->appends(request()->query())->links() }}
    @else
      @include('admin.components.pagination')
    @endif
    <div class="main-bottom-info">
      {{$branches->lastItem()}} показано из {{$branches->total()}} результатов
    </div>
  </div>
	@include('admin.branchs.edit')
@else
	<div class="main-empty">
		<i class="icon">place</i>
		<div class="text">Список пусто</div>
	</div>
@endif
@include('admin.branchs.add')
@endsection