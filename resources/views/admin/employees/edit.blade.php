<div class="modal fade" id="editEmployee" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать сотрудник</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin/employees/2" method="POST">
      {{ method_field('PUT') }}
      @csrf
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="name">ФИО *</label>
          <input class="form-control employee_name" id="name" type="text" name="name">
        </div>
        <input type="hidden" class="employee_id" name="id">
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="manager">Магазын *</label>
              <select class="custom-select manager_id" id="manager" name="manager_id">
                <option value="0" selected disabled>Не выбран</option>
                @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="role_id">Группа *</label>
                <select class="custom-select role_id" id="role_id" name="role_id">
                @foreach($roles as $role)
                  <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label class="form-label" for="mobile">Телефон *</label>
            <input class="form-control mobile" type="text" id="mobile" name="mobile" value="{{old('mobile')}}">
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="password">Пароль</label>
              <input class="form-control" type="text" id="password" name="password">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="status">Статус</label>
          <select class="custom-select status" name="status">
            <option value="1">Активный</option>
            <option value="0">Нективный</option>
          </select>
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