<div class="modal fade" id="editManager" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content needs-validation" method='POST' action="/admin/managers/2" enctype="multipart/form-data" novalidate>
       {{ method_field('PUT') }}
          @csrf
      <div class="modal-header">
        <h5 class="modal-title">Редактировать магазин</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="editManagerImage">Логотип <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="editManagerImage" name="file" accept="image/jpeg">
              <label class="custom-file-label" for="editManagerImage">Загрузить</label>
              <div class="custom-image">
                <img src="#" id="image_show" alt="dostavka">
                <span class="custom-image-close">&times;</span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="edit_name">Название <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="edit_name" name="name" required>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="edit_managerCatId">Категория <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <select class="custom-select" name="manager_category_id" id="edit_managerCatId" required>
              <option value="" disabled>Не выбран</option>
                @foreach($managerCategories as $managerCategory)
                <option value="{{$managerCategory->id}}">{{$managerCategory->name_ru}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="edit_status">Статус</label>
          </div>
          <div class="col-8">
            <select class="custom-select" id="edit_status" name="status">
              <option value="1" selected>Активный</option>
              <option value="0" >Неактивный</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <a href="#" class="deleteManager delete btn btn-outline-red" data-id="" data-token="{{ csrf_token() }}" >Удалить</a>
          <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
          <button type="submit" class="btn btn-green">OK</button>
          <input type="hidden" name="id" id="manager_id" value="">
      </div>
    </form>
  </div>
</div>