<div class="modal fade" id="editClient" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="/admin/clients/1" method="POST" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
          <h5 class="modal-title">Редактировать клиент</h5>
          <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editFirstName">Имя <span class="text-red">*</span></label>
              </div>
              <div class="col-8">
                  <input class="form-control" type="text" id="editFirstName" name="first_name" required>
              </div>
          </div>
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editLastName">Фамилия <span class="text-red">*</span></label>
              </div>
              <div class="col-8">
                  <input class="form-control" type="text" id="editLastName" name="last_name" required>
              </div>
          </div>
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editMobile">Телефон <span class="text-red">*</span></label>
              </div>
              <div class="col-8">
                  <input class="form-control" type="text" id="editMobile" name="phone" required>
              </div>
          </div>
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editPassword">Пароль</label>
              </div>
              <div class="col-8">
                  <input class="form-control" type="text" id="editPassword" name="password">
              </div>
          </div>
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editDate">Дата рождения</label>
              </div>
              <div class="col-8">
                  <input class="form-control" type="date" id="editDate" name="birth_date">
              </div>
          </div>
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editJender">Пол</label>
              </div>
              <div class="col-8">
                  <select class="custom-select" id="editJender" name="jender">
                      <option value="" selected disabled>Не выбран</option>
                      <option value="1">Мужской</option>
                      <option value="0">Женский</option>
                  </select>
              </div>
          </div>
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editRegion">Регион</label>
              </div>
              <div class="col-8">
                  <select class="custom-select" id="editRegion" name="region_id">
                      <option value="" selected disabled>Не выбран</option>
                      @foreach($regions as $region)
                      <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
                      @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group form-row">
              <div class="col-4 col-form-label">
                  <label class="form-label" for="editStatus">Статус</label>
              </div>
              <div class="col-8">
                  <select class="custom-select" id="editStatus" name="status">
                      <option value="1" selected>Активный</option>
                      <option value="0">Неактивен</option>
                  </select>
              </div>
          </div>
          <div class="row">
            <div class="col-8 offset-4">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="editBlackList" name="blacklist" type="checkbox">
                <label class="custom-control-label" for="editBlackList">Черный список</label>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
          <a href="#" class="delete_client btn btn-outline-red mr-auto" data-destroy="">Удалить</a>
          <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
          <button type="submit" class="btn btn-green">OK</button>
          <input type="hidden" name="id" id="editId">
          {{ method_field('PUT') }}
          @csrf
      </div>
    </form>
  </div>
</div>
