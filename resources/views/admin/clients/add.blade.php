<div class="modal fade" id="newStore" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новый клиент</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{ route('clients.store') }}" method="POST" class="needs-validation" novalidate>
      @csrf
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeFirstName">Имя *</label>
          </div>
          <div class="col-8">
            <input type="text" class="form-control" id="storeFirstName" name="first_name" value="{{old('first_name')}}" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeLastName">Фамилия *</label>
          </div>
          <div class="col-8">
            <input type="text" class="form-control" id="storeLastName" name="last_name" value="{{old('last_name')}}" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeMobile">Телефон *</label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="storeMobile" name="mobile" value="{{old('mobile')}}" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="password">Пароль *</label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="password" name="password" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeDate">Дата рождения *</label>
          </div>
          <div class="col-8">
            <input type="date" class="form-control" id="storeDate" name="birth_date" value="{{old('birth_date')}}" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeJender">Пол *</label>
          </div>
          <div class="col-8">
            <select class="custom-select" name="jender" required>
              <option value="" selected disabled>Не выбран</option>
              <option value="1">Мужской</option>
              <option value="0">Женский</option>
            </select>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeRegion">Регион *</label>
          </div>
          <div class="col-8">
            <select class="custom-select" id="storeRegion" name="region_id" required>
              <option value="" selected disabled>Не выбран</option>
              @foreach($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeStatus">Статус</label>
          </div>
          <div class="col-8">
            <select class="custom-select" id="storeStatus" name="status">
            <option value="1" selected>Активный</option>
            <option value="0">Неактивен</option>
          </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-8 offset-4">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" id="blackList" name="blacklist" type="checkbox">
              <label class="custom-control-label" for="blackList">Черный список</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
      </div>
    </form>
    </div>
  </div>
</div>