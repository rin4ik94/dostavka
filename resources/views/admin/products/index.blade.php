@extends('admin.layouts.dashboard') 
@section('content')
<div class="main-top d-flex align-items-center">
	<h1 class="main-title">Продукты</h1>
	<button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newProduct">
        <i class="icon">add</i>
        <span class="text">Добавить продукты</span>
      </button>
</div>
<div class="toolbar d-flex">
	<form method="GET">
		<div class="form-row">
			<div class="col-auto">
				<select class="custom-select" name="manager" onchange="this.form.submit()">
						<option value="all">Все магазины</option>
						@foreach($managers as $manager)
						<option value="{{ $manager->id }}"
							@if(request()->get('manager') == $manager->id) selected
						@endif>{{ $manager->name }}</option>
						@endforeach
					</select>
			</div>
			<div class="col-auto">
				<select class="custom-select" name="status" onchange="this.form.submit()">
						<option value="all" @if(request()->get('status') == 'all') selected @endif>Все статуси</option>
						<option value="1" @if(request()->get('status') == '1') selected @endif>Активные</option>
						<option value="0" @if(request()->get('status') == '0') selected @endif>Неактивные</option>
					</select>
			</div>
			<div class="col-auto">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck1" name="withDiscount" onchange="this.form.submit()" @if(request()->has('withDiscount'))
					checked @endif>
					<label class="custom-control-label" for="customCheck1">Со скидкой</label>
				</div>
			</div>
		</div>
	</form>
	@include('admin.components.search')
</div>
@if(count($products) > 0)
<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th class="col-auto">№</th>
			<th class="col-4">Название</th>
			<th class="col-2">Магазин</th>
			<th class="col-4">Категория</th>
			<th class="col-2">Ценна</th>
			<th class="col-2">Старая цена</th>
			<th class="col-auto">Ед. изм.</th>
			<th class="col-2">Состояние</th>
			<th class="col-auto"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td data-image="{{ $product->image }}">{{ $product->id }}</td>
			<td data-name="{{ $product->name_uz }}"><a href="/" target="_blank">{{ $product->name_ru }}</a></td>
			<td data-manager="{{ $product->manager_id }}">{{ optional($product->manager)->name }}</td>
			<td data-category="{{ $product->category_id }}">{{ $product->category->name_ru }}</td>
			<td data-newprice="{{ $product->new_price }}">{{ number_format($product->new_price, 0,' ',' ') }}</td>
			<td class="text-through" data-oldprice="{{ $product->old_price }}">{{ number_format($product->old_price, 0, ' ',' ') }}</td>
			@if($product->measurement == '1')
			<td data-measurement="{{ $product->measurement }}">шт</td>
			@elseif($product->measurement == '2')
			<td data-measurement="{{ $product->measurement }}">кг</td>
			@elseif($product->measurement == '3')
			<td data-measurement="{{ $product->measurement }}">м</td>
			@elseif($product->measurement == '4')
			<td data-measurement="{{ $product->measurement }}">кв^2</td>
			@endif
			@if($product->status == '1')
			<td class="text-green" data-status="{{ $product->status }}">Активен</td>
			@else
			<td class="text-red" data-status="{{ $product->status }}">Нективен</td>
			@endif
			<td>
				<div class="btn-group btn-group-sm product_action">
					<a href="#" data-toggle="modal" data-target="#editProduct" class="btn btn-light" data="{{$product->id}}">
								<i class="icon">edit</i>
							</a>
				</div>
				{!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id], 'class'=>'btn-group btn-group-sm delete'])
				!!} {!! Form::button('<i class="icon">delete</i>',
				['type' => 'submit', 'class' => 'btn btn-light'] ) !!} {!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="main-bottom d-flex align-items-center">
	@if($products->lastPage() > 1) {{ $products->appends(request()->query())->links() }} @else
	@include('admin.components.pagination')
	@endif
	<div class="main-bottom-info">
		{{$products->lastItem()}} показано из {{$products->total()}} результатов
	</div>
</div>
	@include('admin.products.edit') @else
<div class="main-empty">
	<i class="icon">layers</i>
	<div class="text">Список пусто</div>
</div>
@endif
	@include('admin.products.add')
@endsection