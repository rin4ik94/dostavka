<div class="modal fade" id="newStore" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form class="modal-content needs-validation" action="{{route('managers.store')}}" method="POST" enctype="multipart/form-data" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новый магазин</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="storeFile">Логотип <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="storeFile" name="file" accept="image/jpeg" required>
              <label class="custom-file-label" for="storeFile">Загрузить</label>
              <div class="custom-image">
                <img src="#" alt="dostavka">
                <span class="custom-image-close">&times;</span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="store_name">Название <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="store_name" name="name" value="{{old('name')}}" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="store_manager_cat">Категория <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <select class="custom-select" id="store_manager_cat" name="store_managerCatId" required>
              <option value="" selected disabled>Не выбран</option>
              @foreach($managerCategories as $managerCategory)
              <option value="{{$managerCategory->id}}">{{$managerCategory->name_ru}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="store_status">Статус</label>
          </div>
          <div class="col-8">
            <select class="custom-select" id="store_status" name="store_status">
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