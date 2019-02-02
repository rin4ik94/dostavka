<div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" class="modal-content needs-validation" novalidate> 
      <div class="modal-header">
        <h5 class="modal-title">Новый продукт</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="col-4 col-form-label">
            <label for="product_image">Фото <span class="text-red">*</span></label>
            <small class="text-muted">
              <ul>
                <li>Максимальный размер фотографии: 2 Mb</li>
                <li>Разрешенные типы файлов: png, jpg, jpeg</li>
              </ul>
            </small>
          </div>
          <div class="col-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="product_image" name="image" accept="image/jpeg" required>
              <label class="custom-file-label" for="product_image">Загрузить</label>
              <div class="custom-image">
                <img src="#" alt="dostavka">
                <span class="custom-image-close">&times;</span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="productNameUz">Название (Узб) <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="productNameUz" name="name_uz" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="productNameRu">Название (Рус) <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="productNameRu" name="name_ru" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="productManager">Магазин <span class="text-red">*</span></label>
          <div class="col-8">
            <select class="custom-select api_manager" name="manager_id" required>
              <option value="" selected disabled>Не выбран</option>
              @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="productCategory">Категория <span class="text-red">*</span></label>
          <div class="col-8">
            <select class="custom-select api_category" name="category_id" required disabled>
              <option value="" selected disabled>Не выбран</option>
              @foreach($categories as $category)
                <option value="{{ $category->id }}" disabled>{{ $category->name_ru }}</option>
                @foreach($category->children as $child)
                  <option value="{{ $child->id }}">&nbsp;&nbsp;{{ $child->name_ru }}</option>
                @endforeach
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="productNewPrice">Ценна <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="productNewPrice" name="new_price" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="productOldPrice">Старая цена <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="productOldPrice" name="old_price">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="productMeasurement">Единица измерения <span class="text-red">*</span></label>
          <div class="col-8">
            <select class="custom-select" name="measurement" required>
              <option value="1" selected>шт</option>
              <option value="2">кг</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class=col-4 "col-form-label" for="productStatus">Статус</label>
          <div class="col-8">
            <select class="custom-select" name="status">
              <option value="1" selected>Активный</option>
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
