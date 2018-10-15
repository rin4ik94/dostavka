<div class="modal fade" id="editCourier" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать курьер</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin/couriers/1" method="POST" class="needs-validation" novalidate>
        {{ method_field('PUT') }}
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" id="editId" name="id">
          <label class="form-label" for="editFio">ФИО *</label>
          <input class="form-control" type="text" id="editFio" name="fio" required>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editMobile">Телефон *</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">+998</span>
                </div>
                <input class="form-control" placeholder="Телефон" id="editMobile" type="text" name="mobile" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editPass">Пароль *</label>
              <input class="form-control" type="text" id="editPass" name="password" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="editStatus">Статус</label>
          <select class="custom-select" id="editStatus" name="status">
            <option value="1">Активный</option>
            <option value="0">Неактивный</option>
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