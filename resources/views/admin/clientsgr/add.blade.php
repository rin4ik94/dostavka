<div class="modal fade" id="newClientGr" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новая категория клиента</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        {!! Form::open(array('route' => 'clients.group.store','method'=>'POST')) !!}
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="store_name">Название *</label>
            {!! Form::text('name', null, array('id' =>'store_name','class' => 'form-control')) !!}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>