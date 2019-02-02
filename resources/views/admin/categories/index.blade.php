@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
    <form class="form-row" method="GET">
        <div class="col-auto">
            <select class="custom-select" action="/admin/categories" name="manager" onchange="this.form.submit()">
                <option value="0" selected disabled>Выберите магазин</option>
                @foreach($managers as $manager)
                <option value="{{$manager->id}}" @if(request()->get('manager') == $manager->id) selected
                    @endif>{{ $manager->name }}</option>
                @endforeach
            </select>
        </div>
    </form>
    <div class="ml-auto form-row">
        <div class="col-auto">
            <button class="btn btn-green" data-toggle="modal" data-target="#newCategory">
                <i class="icon">add</i>
                <span class="text"> Добавить категоря</span>
            </button>
        </div>
    </div>
</div>
@if(count($categories) > 0)
<ul class="categories">
    @foreach($categories as $category)
    <li class="category">
        <div class="category-content" data="{{$category->manager_id}}">
            <div class="category-column category-move" data="{{$category->parent_id}}">
                <i class="icon">swap_vert</i>
            </div>
            <div class="category-column category-title" data="{{$category->name_uz}}">
              <a href="#" data-toggle="modal" data-target="#categoryEdit" data="{{ $category->id }}">{{ $category->name_ru}}</a>
          </div>
        </div>
        @foreach($category->children as $child)
        <ul class="categories">
            <li class="category">
                <div class="category-content" data="{{$child->manager_id}}">
                  <div class="category-column category-move" data="{{$child->parent_id}}">
                    <i class="icon">swap_vert</i>
                  </div>
                  <div class="category-column category-title" data="{{$child->name_uz}}">
                    <a href="#" data-toggle="modal" data-target="#categoryEdit" data="{{ $category->id }}">{{ $child->name_ru }}</a>
                  </div>
                </div>
            </li>
        </ul>
        @endforeach
    </li>
    @endforeach
</ul>
@include('admin.categories.edit')
@else
<div class="main-empty">
    <i class="icon">store</i>
    <div class="text">Список пусто</div>
</div>
@endif
@include('admin.categories.add')
@endsection
