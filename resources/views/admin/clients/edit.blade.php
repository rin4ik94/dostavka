<div class="modal fade" id="editClient" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать клиент</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin/clients/1" method="POST" class="needs-validation" novalidate>
        {{ method_field('PUT') }}
        <div class="modal-body">
        <div class="form-group">
          <input type="hidden" name="id" id="editId">
          <label class="form-label" for="editFirstName">Имя *</label>
          <input class="form-control" type="text" id="editFirstName" name="first_name" required>
        </div>
        <div class="form-group">
          <label class="form-label" for="editLastName">Фамилия *</label>
          <input class="form-control" type="text" id="editLastName" name="last_name" required>
        </div>
        <div class="form-row">
          <div class="col">
            <label class="form-label" for="editMobile">Телефон *</label>
            <input class="form-control" type="text" id="editMobile" name="mobile" required>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editPassword">Пароль *</label>
              <input class="form-control" type="text" id="editPassword" name="password" required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editDate">Дата рождения *</label>
              <input class="form-control" type="date" id="editDate" name="birth_date">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editJender">Пол *</label>
              <select class="custom-select" id="editJender" name="jender" required>
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
              <label class="form-label" for="editGroup">Группа</label>
              <select class="custom-select" id="editGroup" name="group_id">
                <option value="1" selected>Обычный покупатель</option>
                <option value="2">Постоянный покупатель</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editRegion">Регион *</label>
              <select class="custom-select" id="editRegion" name="region_id" required>
                <option value="" selected disabled>Не выбран</option>
                @foreach($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="editStatus">Статус</label>
          <select class="custom-select" id="editStatus" name="status">
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