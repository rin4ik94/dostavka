@extends('admin.layouts.dashboard')
@section('content')
<div class="main-top d-flex align-items-center">
      <h1 class="main-title">Список категории</h1>
      <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newCategory">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#plus"></use></svg>
        <span class="text">Добавить категоря</span>
      </button>
    </div>
    <div class="toolbar d-flex">
    <form method="GET">
      <div class="form-row">
        <div class="col-auto">
          <select class="custom-select" action="/admin/categories" name="manager" onchange="this.form.submit()">
            <option value="all">Все магазины</option>
            @foreach($managers as $manager)
              <option value="{{$manager->id}}" 
                @if(request()->get('manager') == $manager->id) selected 
                @endif>{{ $manager->manager->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </form>
    </div>
  @if(count($categories) > 0)
  <ul class="categories">
    @foreach($categories as $category)
    <li class="category">
        <div class="category-content" data="{{$category->manager_id}}">
          <div class="category-column category-move" data="{{$category->parent_id}}">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#move-grabber"></use></svg>
          </div>
          <div class="category-column category-title" data="{{$category->name_uz}}"><a href="/">{{ $category->name_ru }}</a></div>
          <div class="category-column category-action" data="{{$category->status}}">
              <div class="btn-group btn-group-sm action-edit">
                <a href="{{ route('categories.edit',$category->id) }}" data-toggle="modal" data-target="#categoryEdit" class="btn btn-light" data="{{ $category->id }}">
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
                </a>
              </div>
            @if(count($category->children) < 1)
            {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy',$category->id], 'class'=>'btn-group btn-group-sm delete']) !!}
            {!! Form::button('<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
            {!! Form::close() !!}
            @else
            <div class="btn-group btn-group-sm">
              <button type="button" class="btn btn-light" disabled><svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg></button>
            </div>
            @endif
          </div>
        </div>
      @foreach($category->children as $child)
      <ul class="categories">
        <li class="category">
          <div class="category-content" data="{{$child->manager_id}}">
            <div class="category-column category-move" data="{{$child->parent_id}}">
              <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#move-grabber"></use></svg>
            </div>
            <div class="category-column category-title" data="{{$child->name_uz}}">
              <a href="/">{{ $child->name_ru }}</a></div>
            <div class="category-column  category-action" data="{{$child->status}}">
                <div class="btn-group btn-group-sm action-edit">
                  <a href="{{ route('categories.edit',$child->id) }}" data-toggle="modal" data-target="#categoryEdit" class="btn btn-light" data="{{ $child->id }}">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#edit"></use></svg>
                  </a>
                </div>
              {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy',$child->id], 'class'=>'btn-group btn-group-sm delete']) !!}
              {!! Form::button('<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#delete"></use></svg>', ['type' => 'submit', 'class' => 'btn btn-light'] ) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </li>
      </ul>
      @endforeach
    </li>
    @endforeach
  </ul>
  <!-- <div class="main-bottom"><button class="btn btn-green">Сохранить</button></div> -->
  @include('admin.categories.edit')
  @else
  <div class="main-empty">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#store"></use></svg>
    <div class="text">Список пусто</div>
  </div>
    @endif
  @include('admin.categories.add')
@endsection