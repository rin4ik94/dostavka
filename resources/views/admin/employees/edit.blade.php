<div class="modal fade" id="editEmployee" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content needs-validation" action="/admin/employees/2" method="POST" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Редактировать сотрудник</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="name">ФИО *</label>
          <div class="col-8">
            <input class="form-control employee_name" id="name" type="text" name="name">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="manager">Магазын *</label>
          <div class="col-8">
            <select class="custom-select manager_id" id="manager" name="manager_id">
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
            <select class="custom-select role_id" id="role_id" name="role_id">
              @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="mobile">Телефон *</label>
          <div class="col-8">
            <input class="form-control mobile" type="text" id="mobile" name="mobile" value="{{old('mobile')}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="password">Пароль *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="password" name="password">
          </div>
        </div>
        <div class="row">
          <label class="col-4 col-form-label" for="status">Статус</label>
          <div class="col-8">
            <select class="custom-select status" name="status">
              <option value="1">Активный</option>
              <option value="0">Нективный</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="delete_manager btn btn-outline-red mr-auto" data-destroy="">Удалить</a>
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
        <input type="hidden" class="employee_id" name="id">
        {{ method_field('PUT') }}
        @csrf
      </div>
    </form>
  </div>
</div>