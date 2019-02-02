<div class="modal fade" id="editEmployeGroup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content needs-validation" action="/admin/employees/group/2" method="POST" novalidate>
      <div class="modal-loader"></div>
      <div class="modal-header">
        <h5 class="modal-title">Редактировать группа сотрудников</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="name">Название</label>
          <div class="col-8">
            <input class="form-control employeeGrName" type="text" name="name">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="store_name">Магазин</label>
          <div class="col-8">
            <select name="manager_id" class="form-control edit_managerCatId">
              <option value="0" selected disabled>Невыбран</option>
              @foreach($managers as $manager)
                <option value="{{$manager->id}}">
                  {{$manager->name}}
              </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <label class="col-4">Права доступа</label>
        </div>
        <div class="col-8">
          <div class="userPermissions">
          @foreach($permission as  $key => $value)
           <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck{{$value->id}}" name="permission[]" value="{{$value->id}}">
              <label class="custom-control-label" for="customCheck{{$value->id}}">{{ $value->name }}</label>
          </div>
          @endforeach
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
        <input type="hidden" name="id" class="employeeGrId">
        {{ method_field('PUT') }}
        @csrf
      </div>
    </form>
  </div>
</div>