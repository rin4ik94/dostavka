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
        <div class="form-group">
          <label class="form-label" for="storeFirstName">Имя *</label>
          <input type="text" class="form-control" id="storeFirstName" name="first_name" value="{{old('first_name')}}" required>
        </div>
        <div class="form-group">
          <label class="form-label" for="storeLastName">Фамилия *</label>
          <input type="text" class="form-control" id="storeLastName" name="last_name" value="{{old('last_name')}}" required>
        </div>
        <div class="form-row">
          <div class="col">
            <label class="form-label" for="storeMobile">Телефон *</label>
            <input class="form-control" type="text" id="storeMobile" name="mobile" value="{{old('mobile')}}" required>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="password">Пароль *</label>
              <input class="form-control" type="text" id="password" name="password" required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storeDate">Дата рождения *</label>
              <input type="date" class="form-control" id="storeDate" name="birth_date" value="{{old('birth_date')}}" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storeJender">Пол *</label>
              <select class="custom-select" name="jender" required>
                <option value="" selected disabled>Не выбран</option>
                <option value="1">Мужской</option>
                <option value="0">Женский</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storeGroup">Группа</label>
              <select class="custom-select" id="storeGroup" name="group_id">
                <option value="1" selected>Обычный покупатель</option>
                <option value="2">Постоянный покупатель</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storeRegion">Регион *</label>
              <select class="custom-select" id="storeRegion" name="region_id" required>
                <option value="" selected disabled>Не выбран</option>
                @foreach($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="storeStatus">Статус</label>
          <select class="custom-select" id="storeStatus" name="status">
            <option value="1" selected>Активный</option>
            <option value="0">Неактивен</option>
          </select>
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