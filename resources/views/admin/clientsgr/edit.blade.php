<div class="modal fade" id="editClientGr" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать категория клиента</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/clients/group/2" method="POST">
        {{ method_field('PUT') }}
        @csrf
        <div class="modal-body">
          <input type="hidden" name="id" id="edit_id">
          <div class="form-group">
            <label class="form-label" for="edit_name">Название *</label>
            
            <input type="text" name="name" class="form-control" id="edit_name">
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