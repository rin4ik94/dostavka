<div class="modal fade" id="newCourier" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ route('couriers.store') }}" method="POST" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новый курьер</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="courier_name">ФИО *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="courier_name" name="fio" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="courier_phone">Телефон *</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">+998</span>
              </div>
              <input class="form-control" id="courier_phone" type="text" name="mobile" required>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="courier_password">Пароль *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="courier_password" name="password" required>
          </div>
        </div>
        <div class="row">
          <label class="col-4 col-form-label" for="storeStatus">Статус</label>
          <div class="col-8">
            <select class="custom-select" name="storeStatus" name="status">
              <option value="1">Активный</option>
              <option value="0">Неактивный</option>
            </select>
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