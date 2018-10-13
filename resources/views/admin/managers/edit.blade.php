<div class="modal fade" id="editManager" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать магазин</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      <form method='POST' action="/admin/managers/2" class="needs-validation" enctype="multipart/form-data" novalidate>
         {{ method_field('PUT') }}
        @csrf
      <div class="modal-body">
        <div class="row">
          <div class="col-5">
            <label class="form-label" for="editManagerImage">Логотип *</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input file" id="editManagerImage" name="file" accept="image/jpeg">
              <label class="custom-file-label" for="editManagerImage">Загрузить</label>
              <div class="custom-image">
                <img src="#" id="image_show" alt="dostavka">
                <span class="custom-image-close">&times;</span>
              </div>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label class="form-label" for="edit_name">Название *</label>
              <input class="form-control" type="text" id="edit_name" name="name" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="edit_managerCatId">Категория *</label>
              <select class="custom-select" name="manager_category_id" id="edit_managerCatId" required>
                <option value="" disabled>Не выбран</option>
                  @foreach($managerCategories as $managerCategory)
                  <option value="{{$managerCategory->id}}">{{$managerCategory->name_ru}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="edit_status">Статус</label>
              <select class="custom-select" id="edit_status" name="status">
                <option value="1" selected>Активный</option>
                <option value="0" >Неактивный</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" name="id" id="manager_id" value="">
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
      </div>
      </form>
    </div>
  </div>
</div>