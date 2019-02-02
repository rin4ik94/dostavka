<div class="modal fade" id="newStore" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form action="{{route('managers.store')}}" method="POST" enctype="multipart/form-data" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новый магазин </h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <label class="col-4 col-form-label" for="storeFile">Логотип <span class="text-red">*</span></label>
          <div class="col-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="storeFile" name="logo" accept="image/jpeg" required>
              <label class="custom-file-label" for="storeFile">Загрузить</label>
              <div class="custom-image">
                <img src="#" alt="">
                <button class="btn btn-sm btn-light custom-image-close" type="button">Удалить</button>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group form-row">
          <label class="col-4 col-form-label" for="store_name">Название <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="store_name" name="name" value="{{old('name')}}" required>
          </div>
        </div>
        <div class="form-group form-row">
          <label class="col-4 col-form-label" for="store_manager_cat">Категория <span class="text-red">*</span></label>
          <div class="col-8">
            <select class="custom-select" id="store_manager_cat" name="manager_category_id" required>
              <option value="" selected disabled>Не выбран</option>
              @foreach($managerCategories as $managerCategory)
              <option value="{{$managerCategory->id}}">{{$managerCategory->name_ru}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
          <label class="col-4 col-form-label" for="store_status">Статус</label>
          <div class="col-8">
            <select class="custom-select" id="store_status" name="status">
              <option value="1" selected>Активный</option>
              <option value="0" >Неактивный</option>
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
