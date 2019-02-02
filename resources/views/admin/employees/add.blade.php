<div class="modal fade" id="newEmployee" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content needs-validation" action="{{route('employees.store')}}" method="POST" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Новый сотрудник</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="name">ФИО *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="manager">Магазын *</label>
          <div class="col-8">
            <select class="custom-select" name="manager_id" required>
              <option value="0" selected disabled>Не выбран</option>
              @foreach($managers as $manager)
              <option value="{{ $manager->id }}">{{ $manager->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="role_id">Группа *</label>
          <div class="col-8">
            <select class="custom-select" id="role_id" name="role_id" required>
              @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="mobile">Телефон *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="mobile" name="mobile" value="{{old('mobile')}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="password">Пароль *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="password" name="password" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="status">Статус</label>
          <div class="col-8">
            <select class="custom-select" name="status">
              <option value="1" selected>Активный</option>
              <option value="0">Нективный</option>
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