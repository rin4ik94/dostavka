<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ route('categories.store') }}" method="POST" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новая категория</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="name_uz">Название (УЗБ) *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="name_uz" name="name_uz" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label"  for="name_ru">Название (РУС) *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="name_ru" name="name_ru" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="manager_id">Магазин *</label>
          <div class="col-8">
            <select class="custom-select get_category_parents" name="manager_id" id="manager_id" required>
            <option value="" selected disabled>Не выбран</option>
              @foreach($managers as $manager)
                <option value="{{ $manager->id }}" @if(request()->has('manager') && request()->get('manager') == $manager->id) selected @endif>{{ $manager->name }}</option>
              @endforeach
              
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="store_parent">Основная категория</label>
          <div class="col-8">
            <select class="custom-select get_cat_parent" id="store_parent" name="parent_id">
              <option value="" selected>Не выбран</option>
              @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name_ru }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="store_status">Статус</label>
          <div class="col-8">
            <select class="custom-select" id="store_status" name="status">
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