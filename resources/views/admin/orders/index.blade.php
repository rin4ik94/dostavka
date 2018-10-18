@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar d-flex">
      <div class="form-row">
        <div class="col-auto">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-green active">
              <input type="radio" name="options" id="option1" autocomplete="off" checked>Новый <span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option2" autocomplete="off">Формируется <span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option3" autocomplete="off">В пути <span class="badge">4</span>
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option4" autocomplete="off">Доставлен
            </label>
            <label class="btn btn-outline-green">
              <input type="radio" name="options" id="option5" autocomplete="off">Отменен
            </label>
          </div>
        </div>
        <div class="col-auto">
          <input class="form-control" type="date" value="2018-10-13">
        </div>
      </div>
      @include('admin.components.search')
    </div>
    <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th class="col-auto">№</th>
        <th class="col-2">Поступил</th>
        <th class="col-2">Магазин</th>
        <th class="col-2">Товары</th>
        <th class="col-2">Адрес доставки</th>
        <th class="col-2">Клент</th>
        <th class="col-2">Курьер</th>
        <th class="col-2">Сумма</th>
        
        <th class="col-2">Статус</th>
        <th class="col-auto"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>4721</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td>15</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td>Абдулла</td>
        <td><a class="text-red" href="#" data-toggle="modal" data-target="#confirm">Назначить</a></td>
        <td>50 000</td>
        <td><span class="badge badge-primary">Новый</span></td>
        <td>
          <button class="btn btn-sm btn-light" type="submit">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>2358</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td>15</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td>Абдулла</td>
        <td><a class="text-red" href="#" data-toggle="modal" data-target="#confirm">Назначить</a></td>
        <td>50 000</td>
      
        <td><span class="badge badge-secondary">Формируется</span></td>
        <td>
          <button class="btn btn-sm btn-light" type="submit">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>0147</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td>15</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td>Абдулла</td>
        <td><a href="#" data-toggle="modal" data-target="#confirm">Абдулла</a></td>
        <td>50 000</td>
      
        <td><span class="badge badge-warning">В пути</span></td>
        <td>
          <button class="btn btn-sm btn-light" type="submit">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>6332</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td>15</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td>Абдулла</td>
        <td><a href="#" data-toggle="modal" data-target="#confirm">Абдулла</a></td>
        <td>50 000</td>
      
        <td><span class="badge badge-success">Доставлен</span></td>
        <td>
          <button class="btn btn-sm btn-light" type="submit">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
      <tr>
        <td>7446</td>
        <td>01.01.2018 20:00</td>
        <td>Makro</td>
        <td>15</td>
        <td>г.Фергана ул.Сфйлгох</td>
        <td>Абдулла</td>
        <td><a href="#" data-toggle="modal" data-target="#confirm">Абдулла</a></td>
        <td>50 000</td>
      
        <td><span class="badge badge-red">Отменен</span></td>
        <td>
          <button class="btn btn-sm btn-light" type="submit">
            <i class="icon">edit</i>
          </button>
        </td>
      </tr>
    </tbody>
  </table>

		<div class="main-bottom d-flex align-items-center">
			@include('admin.components.pagination')
			<div class="main-bottom-info">20 показано из 45 результатов</div>
		</div>



@endsection