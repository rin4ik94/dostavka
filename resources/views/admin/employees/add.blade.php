<div class="modal fade" id="newEmployee" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новый сотрудник</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(array('route' => 'employees.store','method'=>'POST')) !!}
      <form action="{{route('employees.store')}}" method="POST">
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="name">ФИО *</label>
          <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="manager">Магазын *</label>
              <select class="custom-select" name="manager_id">
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
                <select class="custom-select" id="role_id" name="role_id">
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
            <input class="form-control" type="text" id="mobile" name="mobile" value="{{old('mobile')}}">
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="password">Пароль *</label>
              <input class="form-control" type="text" id="password" name="password">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="status">Статус</label>
          <select class="custom-select" name="status">
            <option value="1" selected>Активный</option>
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