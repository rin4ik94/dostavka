<div class="modal fade" id="editEmployeGroup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать группа сотрудников</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin/employees/group/2" method="POST">
      {{ method_field('PUT') }}
      @csrf
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="name">Название</label>
          <input type="hidden" name="id" class="employeeGrId">
          <input class="form-control employeeGrName" type="text" name="name">
        </div>
        <div class="form-group">
          <label class="form-label" for="store_name">Магазин</label>
            <select name="manager_id" class="form-control edit_managerCatId">
                  <option value="0" selected disabled>Невыбран</option>
                  @foreach($managers as $manager)
                    <option value="{{$manager->id}}">
                      {{$manager->name}}
                  </option>
                  @endforeach
              </select>
        </div>
        <h5>Права доступа</h5>
        <div class="userPermissions">
        @foreach($permission as  $key => $value)
         <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck{{$value->id}}" name="permission[]" value="{{$value->id}}">
            <label class="custom-control-label" for="customCheck{{$value->id}}">{{ $value->name }}</label>
        </div>
        @endforeach
        </div>
        <div class="modal-loader"></div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
      </div>
      </form>
    </div>
  </div>
</div>