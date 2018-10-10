<div class="modal fade" id="newStoreCategory" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новая категория магазина</h5>
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
        {!! Form::open(array('route' => 'managers.group.store','method'=>'POST')) !!}
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="store_name_uz">Название (RU) *</label>
          {!! Form::text('name_ru', null, array('id' =>'store_name_uz','class' => 'form-control')) !!}
          <!-- <input class="form-control" type="text" id="store_name" name="sotre_name" required> -->
        </div>
        <div>
          <label class="form-label" for="store_name_ru">Название (UZ) *</label>
          {!! Form::text('name_uz', null, array('id' =>'store_name_ru','class' => 'form-control')) !!}
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