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
        <div class="row">
          <div class="col-5">
            <label class="form-label" for="product_image">Логотип</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="product_image" name="product_image" accept="image/jpeg">
              <label class="custom-file-label" for="product_image">Загрузить</label>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label class="form-label" for="store_name">Название</label>
              <input class="form-control" type="text" id="store_name" name="sotre_name">
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="store_region">Регион</label>
                  <select class="custom-select" name="store_region">
                    <option value="0" selected disabled>Не выбран</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="store_region">Категория</label>
                  <select class="custom-select" name="store_region">
                    <option value="0" selected disabled>Не выбран</option>
                  </select>
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
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-green">OK</button>
      </div>
    </div>
  </div>
</div>