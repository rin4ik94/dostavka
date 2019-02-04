<div class="modal fade" id="editRegion" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form class="modal-content needs-validation" action="/admin/settings/regions/1" method="POST" novalidate>
      {{ method_field('PUT') }}
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Редактировать Регион</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="editRegionNameRu">Название (RU) <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="editRegionNameRu" name="name_ru" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-4 col-form-label">
            <label class="form-label" for="editRegionNameUz">Название (UZ) <span class="text-red">*</span></label>
          </div>
          <div class="col-8">
            <input class="form-control" type="text" id="editRegionNameUz" name="name_uz" required>
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <input type="hidden" name="id" id="editRegionId" value="">
          <a href="#" class="delete_region btn btn-outline-red mr-auto" data-id="" data-token="{{ csrf_token() }}" >Удалить</a>
          <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
          <button type="submit" class="btn btn-green">OK</button>
        </div>
    </form>
  </div>
</div>