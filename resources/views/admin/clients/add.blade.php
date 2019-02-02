<div class="modal fade" id="newStore" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ route('clients.store') }}" method="POST" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новый клиент</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeFirstName">Имя <span class="text-red">*</span></label>
          <div class="col-8">
            <input type="text" class="form-control" id="storeFirstName" name="first_name" value="{{old('first_name')}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeLastName">Фамилия <span class="text-red">*</span></label>
          <div class="col-8">
              <input type="text" class="form-control" id="storeLastName" name="last_name" value="{{old('last_name')}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeMobile">Телефон <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="storeMobile" name="phone" value="{{old('mobile')}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="add_password">Пароль</label>
          <div class="col-8">
            <input class="form-control" type="text" id="password" name="password">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeDate">Дата рождения</label>
          <div class="col-8">
            <input type="date" class="form-control" id="storeDate" name="birth_date" value="{{old('birth_date')}}">
          </div>
        </div>
          <div class="form-group row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="storeJender">Пол</label>
              </div>
              <div class="col-8">
                  <select class="custom-select" name="jender">
                      <option value="" selected disabled>Не выбран</option>
                      <option value="1">Мужской</option>
                      <option value="0">Женский</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="storeRegion">Регион</label>
              </div>
              <div class="col-8">
                  <select class="custom-select" id="storeRegion" name="region_id">
                      <option value="" selected disabled>Не выбран</option>
                      @foreach($regions as $region)
                      <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
                      @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group row">
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
          <div class="row">
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
        @csrf
      </div>
    </form>
  </div>
</div>
