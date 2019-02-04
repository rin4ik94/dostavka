<div class="modal fade" id="editCourier" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="/admin/couriers/1" method="POST" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Редактировать курьер</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editFio">ФИО <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="editFio" name="fio" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editMobile">Телефон <span class="text-red">*</span></label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">+998</span>
              </div>
              <input class="form-control" placeholder="Телефон" id="editMobile" type="text" name="mobile" required>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editPass">Пароль <span class="text-red">*</span></label>
          <div class="col-8">
            <div class="input-group">
              <input class="form-control" type="text" id="editPass" name="password" required>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editStatus">Статус</label>
          <div class="col-8">
            <select class="custom-select" id="editStatus" name="status">
              <option value="1">Активный</option>
              <option value="0">Неактивный</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="delete_courier btn btn-outline-red mr-auto" data-destroy="">Удалить</a>
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
        <input type="hidden" id="editId" name="id">
        {{ method_field('PUT') }}
        @csrf
      </div>
    </form>
  </div>
</div>