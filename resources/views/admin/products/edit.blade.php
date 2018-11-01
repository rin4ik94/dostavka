<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать продукт</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method='POST' action="/admin/products/1" enctype="multipart/form-data" id="productEdit" class="needs-validation" novalidate>
         {{ method_field('PUT') }}
        @csrf
      <div class="modal-body">
        <div class="row">
          <div class="col-5">
            <label class="form-label" for="editProductImage">Фото <span class="text-red">*</span></label>
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
          <input type="hidden" name="id" class="edit_product_id">
          <div class="col-7">
            <div class="form-group">
              <label class="form-label" for="editNameUz">Название (Узб) <span class="text-red">*</span></label>
              <input class="form-control" type="text" id="editNameUz" name="name_uz" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="editNameRu">Название (Рус) <span class="text-red">*</span></label>
              <input class="form-control name_ru" type="text" id="editNameRu" name="name_ru" required>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="editManager">Магазин <span class="text-red">*</span></label>
                  <select class="custom-select api_manager" id="editManager" name="manager_id" required>
                    @foreach($managers as $manager)
                      <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="editCat">Категория <span class="text-red">*</span></label>
                  <select class="custom-select api_category" id="editCat" name="category_id" required>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}" disabled>{{ $category->name_ru }}</option>
                      @foreach($category->children as $child)
                        <option value="{{ $child->id }}">&nbsp;{{ $child->name_ru }}</option>
                      @endforeach
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="editNewPrice">Ценна <span class="text-red">*</span></label>
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
              <label class="form-label" for="editMeasurement">Единица измерения <span class="text-red">*</span></label>
              <select class="custom-select measurement" name="measurement" required>
                <option value="1">шт</option>
                <option value="2">кг</option>
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
        <a href="#" class="delete_porduct btn btn-outline-red mr-auto" data-destroy="">Удалить</a>
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
      </div>
    </div>
    </form>
  </div>
</div>  