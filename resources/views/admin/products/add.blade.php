<div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новый продукт</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate> 
        @csrf
      <div class="modal-body">
        <div class="row">
          <div class="col-5">
            <label class="form-label" for="product_image">Фото *</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="product_image" name="image" accept="image/jpeg" required>
              <label class="custom-file-label" for="product_image">Загрузить</label>
              <div class="custom-image">
                <img src="#" alt="dostavka">
                <span class="custom-image-close">&times;</span>
              </div>
            </div>
            <div class="noteAlt">
              <ul>
                <li>Максимальный размер фотографии: 2 Mb</li>
                <li>Разрешенные типы файлов: jpg, png, jpeg</li>
              </ul>
            </div>
          </div>

          <div class="col-7">
            <div class="form-group">
              <label class="form-label" for="productNameUz">Название (Узб) *</label>
              <input class="form-control" type="text" id="productNameUz" name="name_uz" required>
            </div>
             <div class="form-group">
              <label class="form-label" for="productNameRu">Название (Рус) *</label>
              <input class="form-control" type="text" id="productNameRu" name="name_ru" required>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="productManager">Магазин *</label>
                  <select class="custom-select" name="manager_id" required>
                    <option value="" selected disabled>Не выбран</option>
                    @foreach($managers as $manager)
                      <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="productCategory">Категория *</label>
                  <select class="custom-select" name="category_id" required>
                    <option value="" selected disabled>Не выбран</option>
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
                  <label class="form-label" for="productNewPrice">Ценна *</label>
                  <input class="form-control" type="text" id="productNewPrice" name="new_price" required>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="productOldPrice">Старая цена</label>
                  <input class="form-control" type="text" id="productOldPrice" name="old_price">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="productMeasurement">Единица измерения *</label>
              <select class="custom-select" name="measurement" required>
                <option value="1" selected>шт</option>
                <option value="2">кг</option>
                <option value="3">м</option>
                <option value="4">кв^2</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="productStatus">Статус</label>
              <select class="custom-select" name="status">
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
      </form>
    </div>
  </div>
</div>  