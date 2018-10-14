<div class="modal fade" id="newCourier" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новый курьер</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('couriers.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="storeFio">ФИО *</label>
          <input class="form-control" type="text" id="storeFio" name="fio" required>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storeMobile">Телефон *</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">+998</span>
                </div>
                <input class="form-control" placeholder="Телефон" id="storeMobile" type="text" name="mobile" required>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storePassword">Пароль *</label>
              <input class="form-control" type="text" id="storePassword" name="password" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="storeStatus">Статус</label>
          <select class="custom-select" name="storeStatus" name="status">
            <option value="1">Активный</option>
            <option value="0">Неактивный</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
      </div>
    </div>
    </form>
  </div>
</div>