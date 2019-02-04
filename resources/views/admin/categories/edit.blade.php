<div class="modal fade" id="categoryEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/admin/categories/2" method="POST" class="needs-validation" novalidate>
      {{ method_field('PUT') }}
       @csrf
      <div class="modal-header">
        <h5 class="modal-title">Редактировать категория</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input type="hidden" class="editCatId" name="id">
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editCatNameUz">Название (Узб) *</label>
          <div class="col-8">
            <input class="form-control editCatNameUz" type="text" id="editCatNameUz" name="name_uz" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editCatNameRu">Название (Рус) *</label>
          <div class="col-8">
            <input class="form-control editCatNameRu" type="text" id="editCatNameRu" name="name_ru" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editCatManager">Магазин *</label>
          <div class="col-8">
            <select class="custom-select editCatManager" name="manager_id" required>
            <option value="" selected disabled>Не выбран</option>
              @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editCatParent">Основная категория</label>
          <div class="col-8">
            <select class="custom-select editCatParent get_cat_parent" name="parent_id">
              <option value="">Не выбран</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name_ru }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editCatStatus">Статус</label>
          <div class="col-8">
            <select class="custom-select editCatStatus" name="status">
              <option value="1">Активный</option>
              <option value="0">Неактивный</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="delete_category btn btn-outline-red mr-auto" data-destroy="" disabled>Удалить</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
      </div>
    </form>
    </div>
  </div>
</div>