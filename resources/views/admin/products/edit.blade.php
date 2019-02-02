<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method='POST' action="/admin/products/1" enctype="multipart/form-data" id="productEdit" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Редактировать продукт</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="editProductImage">Фото <span class="text-red">*</span></label>
            <small class="text-muted">
              <ul>
                <li>Максимальный размер фотографии: 2 Mb</li>
                <li>Разрешенные типы файлов: png, jpg, jpeg</li>
              </ul>
            </small>
          </div>
          <div class="col-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="editProductImage" name="image" accept="image/jpeg">
              <label class="custom-file-label" for="editProductImage">Загрузить</label>
              <div class="custom-image">
                <img src="#" id="image_show" alt="dostavka">
                <span class="custom-image-close">&times;</span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editNameUz">Название (Узб) <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="editNameUz" name="name_uz" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editNameRu">Название (Рус) <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="editNameRu" name="name_ru" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editManager">Магазин <span class="text-red">*</span></label>
          <div class="col-8">
            <select class="custom-select api_manager" id="editManager" name="manager_id" required>
              @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editCat">Категория <span class="text-red">*</span></label>
          <div class="col-8">
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
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editNewPrice">Ценна <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="editNewPrice" name="new_price" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editOldPrice">Старая цена</label>
          <div class="col-8">
            <input class="form-control" type="text" id="editOldPrice" name="old_price">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editMeasurement">Единица измерения <span class="text-red">*</span></label>
          <div class="col-8">
            <select class="custom-select measurement" name="measurement" required>
              <option value="1">шт</option>
              <option value="2">кг</option>
            </select>
          </div>
        </div>
        <div class="row">
          <label class="col-4 col-form-label" for="editStatus">Статус</label>
          <div class="col-8">
            <select class="custom-select status" name="status">
              <option value="1" selected>Активный</option>
              <option value="0">Неактивный</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="delete_porduct btn btn-outline-red mr-auto" data-destroy="">Удалить</a>
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
        <input type="hidden" name="id" class="edit_product_id">
        {{ method_field('PUT') }}
        @csrf
      </div>
    </form>
  </div>
</div>  