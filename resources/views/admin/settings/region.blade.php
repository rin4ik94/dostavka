@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
    <div class="ml-auto form-row">
        <div class="col-auto">
            <button class="btn btn-green ml-auto" data-toggle="modal" data-target="#newStoreRegion">
                <i class="icon">add</i>
                <span class="text">Добавить Регион</span>
            </button>
        </div>
    </div>
</div>
@if(count($regions) > 0)
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th width="54px;">№</th>
            <th>Название(Рус)</th>
            <th>Название(Уз)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($regions as $region)
        <tr data-id="{{ $region->id }}" data-name-uz="{{ $region->name_uz }}" data-name-ru="{{ $region->name_ru }}">
            <td>{{$region->id}}</td>
            <td>
              <a class="text-green region_action" href="#" data-toggle="modal" data-target="#editRegion">{{$region->name_ru}}</a>
          </td>
          <td>
              {{$region->name_ru}}
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('admin.settings.regions.editregion')
@else
<div class="main-empty">
    <i class="icon">store</i>
    <div class="text">Список пусто</div>
</div>
@endif
@include('admin.settings.regions.addregion')
@endsection