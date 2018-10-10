<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать продукт</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method='POST' action="/admin/products/2" enctype="multipart/form-data" class="needs-validation" novalidate>
         {{ method_field('PUT') }}
        @csrf
      <div class="modal-body">
        <div class="row">
          <div class="col-5">
            <label class="form-label" for="editProductImage">Фото *</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="editProductImage" name="image" accept="image/jpeg">
              <label class="custom-file-label" for="editProductImage">Загрузить</label>
              <div class="custom-image">
                <img src="#" id="image_show" alt="dostavka">
                <span class="custom-image-close">&times;</span>
              </div>
            </div>
            <div class="noteAlt">
                Максимальный размер фотографии: 2 Mb <br> 
                Разрешенные типы файлов: jpg, png, jpeg.
            </div>
          </div>
          <input type="hidden" name="id" class="editProduct_id">
          <div class="col-7">
            <div class="form-group">
              <label class="form-label" for="editNameUz">Название (Узб) *</label>
              <input class="form-control" type="text" id="editNameUz" name="name_uz" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="editNameRu">Название (Рус) *</label>
              <input class="form-control name_ru" type="text" id="editNameRu" name="name_ru" required>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="editManager">Магазин *</label>
                  <select class="custom-select manager_id" name="manager_id" required>
                    @foreach($managers as $manager)
                      <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="editCat">Категория *</label>
                  <select class="custom-select category_id" name="category_id" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name_ru }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="editNewPrice">Ценна *</label>
                  <input class="form-control" type="text" id="editNewPrice" name="new_price" required>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="editOldPrice">Старая цена</label>
                  <input class="form-control" type="text" id="editOldPrice" name="old_price">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="editMeasurement">Единица измерения *</label>
              <select class="custom-select measurement" name="measurement" required>
                <option value="1" selected>шт</option>
                <option value="2">кг</option>
                <option value="3">м</option>
                <option value="4">кв^2</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="editStatus">Статус</label>
              <select class="custom-select status" name="status">
                <option value="1" selected>Активный</option>
                <option value="0">Неактивный</option>
              </select>
            </div>
          </div>
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