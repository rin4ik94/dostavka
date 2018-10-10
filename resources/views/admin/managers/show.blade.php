@extends('layouts.admin.dashboard')
@section('content')
 <div class="main-top d-flex align-items-center">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('manager.group.index') }}">Назад</a>
    </div>
  </div>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th class="col-auto">№</th>
          <th class="col-12">Название (RU)</th>
          <th class="col-12">Название (UZ)</th>
          <th class="col-12">Дата создания</th>
        </tr>
      </thead>
      <tbody>
        @foreach($managerCategories as $managerCategorie)
        <tr>
          <td>{{$managerCategorie->id}}</td>
          <td>{{$managerCategorie->name_ru}}</td>
          <td>{{$managerCategorie->name_uz}}</td>
          <td>{{$managerCategorie->created_at}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection