@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
    <form class="form-row" method="GET">
        <div class="col-auto">
            <select class="custom-select" name="manager" onchange="this.form.submit()">
                <option value="all">Все магазины</option>
                @foreach($managers as $manager)
                <option value="{{ $manager->id }}" @if(request()->get('manager') == $manager->id) selected
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
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="withDiscount" onchange="this.form.submit()"
                    @if(request()->has('withDiscount'))
                checked @endif>
                <label class="custom-control-label" for="customCheck1">Со скидкой</label>
            </div>
        </div>
    </form>
    <div class="ml-auto form-row">
        @include('admin.components.search')
        <div class="col-auto">
            <button class="btn btn-green" data-toggle="modal" data-target="#newProduct">
                <i class="icon">add</i>
                <span class="text">Добавить продукты</span>
            </button>
        </div>
    </div>
</div>
@if(count($products) > 0)
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
			<th width="54px;">№</th>
            <th>Название</th>
            <th width="250px;">Магазин</th>
            <th width="250px;">Категория</th>
            <th width="250px;">Ценна</th>
            <th width="250px;">Старая цена</th>
            <th width="54px;">Ед. изм.</th>
            <th width="100px;">Состояние</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr data-id="{{$product->id}}" data-image="{{ $product->image }}" data-nameru="{{ $product->name_ru }}" data-nameuz="{{ $product->name_uz }}" data-manager="{{ $product->manager_id }}" data-category="{{ $product->category_id }}" data-newprice="{{ $product->new_price }}" data-oldprice="{{ $product->old_price }}" data-measurement="{{ $product->measurement }}" data-status="{{ $product->status }}">
            <td>{{ $product->id }}</td>
            <td><a href="#" class="text-green product_action" data-toggle="modal" data-target="#editProduct">{{ $product->name_ru }}</a></td>
            <td>{{ optional($product->manager)->name }}</td>
            <td>{{ $product->category->name_ru }}</td>
            <td>{{ number_format($product->new_price, 0,' ',' ') }} сум</td>
            <td class="text-through">{{ number_format($product->old_price, 0,
                ' ',' ') }} сум</td>
            @if($product->measurement == '1')
            <td>шт</td>
            @else
            <td>кг</td>
			@endif
			
            @if($product->status == '1')
            <td class="text-green">Активен</td>
            @else
            <td class="text-red">Нективен</td>
            @endif
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
