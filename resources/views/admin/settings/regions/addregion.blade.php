<div class="modal fade" id="newStoreRegion" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form class="modal-content needs-validation" action="{{ route('settings.region.store') }}" method="POST" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новая Регион</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="store_name_ru">Название (RU) <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="store_name_ru" name="name_ru" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="store_name_uz">Название (UZ) <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="store_name_uz" name="name_uz" required>
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
