<div class="modal fade" id="editManager" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method='POST' action="/admin/managers/2" enctype="multipart/form-data" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Редактировать магазин</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <label class="col-4 col-form-label" for="editManagerImage">Логотип <span class="text-red">*</span></label>
          <div class="col-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="editManagerImage" name="logo" accept="image/jpeg">
              <label class="custom-file-label" for="editManagerImage">Загрузить</label>
              <div class="custom-image">
                <img src="#" id="image_show" alt="">
                <button class="btn btn-sm btn-light custom-image-close" type="button">Удалить</button>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group form-row">
          <label class="col-4 col-form-label" for="edit_name">Название <span class="text-red">*</span></label>
          <div class="col-8">
            <input class="form-control" type="text" id="edit_name" name="name" required>
          </div>
        </div>
        <div class="form-group form-row">
          <label class="col-4 col-form-label" for="edit_manager_cat_id">Категория <span class="text-red">*</span></label>
          <div class="col-8">
            <select class="custom-select" name="manager_category_id" id="edit_manager_cat_id" required>
              <option value="" disabled>Не выбран</option>
                @foreach($managerCategories as $managerCategory)
                <option value="{{$managerCategory->id}}">{{$managerCategory->name_ru}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group form-row">
          <label class="col-4 col-form-label" for="edit_status">Статус</label>
          <div class="col-8">
            <select class="custom-select" id="edit_status" name="status">
              <option value="1" selected>Активный</option>
              <option value="0" >Неактивный</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="delete_manager btn btn-outline-red mr-auto" data-destroy="">Удалить</a>
        <input type="hidden" name="id" id="manager_id" value="">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
        {{ method_field('PUT') }}
        @csrf
      </div>
    </form>
  </div>
</div>