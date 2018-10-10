<div class="modal fade" id="editStore" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новый магазин</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="store_name">ФИО</label>
          <input class="form-control" type="text" id="store_name" name="sotre_name">
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="store_region">Группа</label>
              <select class="custom-select" name="store_region">
                <option value="0" selected disabled>Не выбран</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="store_region">Пароль</label>
              <input class="form-control" type="text" id="store_name" name="sotre_name">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="store_region">Статус</label>
          <select class="custom-select" name="store_region">
            <option value="0" selected>Активный</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-green">OK</button>
      </div>
    </div>
  </div>
</div>