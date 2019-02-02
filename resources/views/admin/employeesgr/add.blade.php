<div class="modal fade" id="newEmployeGroup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ route('employees.group.store') }}" method="POST" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новая группа сотрудников</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="name">Название *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="name" name="name" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="store_name">Магазин *</label>
          <div class="col-8">
            <select name="manager_id" class="form-control" required>
              <option value="" selected disabled>Невыбран</option>
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
          <div class="col-8">
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
         @csrf
      </div>
    </form>
  </div>
</div>