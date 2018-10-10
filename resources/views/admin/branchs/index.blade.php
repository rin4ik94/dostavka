@extends('layouts.admin.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
	<h1 class="main-title">Список филиалов</h1>
	<button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStore">
		<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus"></use></svg>
		<span class="text">Добавить филиал</span>
	</button>
</div>
@if(count($branches) > 0)
<div class="toolbar d-flex">
<form method="GET">
<div class="form-row">
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
</div>
</form>
@include('admin.components.search')
</div>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="col-auto">№</th>
			<th class="col-4">Название</th>
			<th class="col-2">Магазин</th>
			<th class="col-2">Регион</th>
			<th class="col-4">Адрес</th>
			<th class="col-auto"></th>
		</tr>
	</thead>
	<tbody>
			@foreach($branches as $branch)
			<tr>
				<td>{{ $branch->id }}</td>
				<td>{{ $branch->name }}</td>
				<td>{{ $branch->manager->name }}</td>
				<td>{{ $branch->region->name_ru }}</td>
				<td>{{ $branch->address }}</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a href="{{ route('branchs.edit',$branch->id) }}" data-toggle="modal" data-target="#editBranch" class="btn btn-light branchs_action" data="{{ $branch->id }}">
						<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
					</a>
				</div>
				{!! Form::open(['method' => 'DELETE','route' => ['branchs.destroy',$branch->id], 'class'=>'btn-group btn-group-sm delete']) !!}
				{!! Form::button('<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
				{!! Form::close() !!}
			</td>
			</tr>
			@endforeach
	</tbody>
</table>
<div class="main-bottom d-flex align-items-center">
    @if($branches->lastPage() > 1)
      {{ $branches->links() }}
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
		<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#store"></use></svg>
		<div class="text">Список пусто</div>
	</div>
@endif
@include('admin.branchs.add')
@endsection