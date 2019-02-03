<div class="modal fade" id="editBranch" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="/admin/branchs/1" method="POST" class="modal-content needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title">Редактировать филиал</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editBranchName">Название *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="editBranchName" name="name" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editManagerName">Магазин *</label>
          <div class="col-8">
            <select class="custom-select" id="editManagerName" name="manager_id" required>
              @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editRegionName">Регион *</label>
          <div class="col-8">
            <select class="custom-select" id="editRegionName" name="region_id" required>
              @foreach($regions as $region)
                <option value="{{ $region['id'] }}">{{ $region['name_ru'] }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="editAddress">Адрес *</label>
          <div class="col-8">
            <textarea class="form-control" id="editAddress" name="address" required></textarea>
          </div>
        </div>
        <h5>Режим работи</h5>
          @foreach($workingModes as  $workingMode)
         <div class="form-group row">
         <div class="col-4 col-form-label">
          <div class="custom-control custom-checkbox branCheckbox">
            <input type="checkbox" class="custom-control-input" id="branchEdit{{$workingMode['id']}}" name="workingModes[]"
            value="{{$workingMode['id']}}">
            <label class="custom-control-label" for="branchEdit{{$workingMode['id']}}">{{ $workingMode['name_ru'] }}</label>
            </div>
          </div>
          <div class="col-8">
            <div class="form-row">
              <div class="col">
                <select class="custom-select timeStart" name="time_start[]" disabled required>
                  <option selected disabled>от</option>
                  @foreach($workingTimes as $workingTime)
                  <option value="{{$workingTime['hours']}}">{{$workingTime['hours']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col">
                <select class="custom-select timeFinish" name="time_finish[]" disabled required>
                  <option selected disabled>до</option>
                  @foreach($workingTimes as $workingTime)
                  <option value="{{$workingTime['hours']}}">{{$workingTime['hours']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
         @endforeach
        <div class="form-group row">
          <label class="col-4 col-form-label" for="status">Статус</label>
          <div class="col-8">
            <select class="custom-select" name="status" id="editStatus">
              <option value="1">Активен</option>
              <option value="0">Неактивен</option>
            </select>
          </div>
        </div>
      <div class="modal-loader"></div>
      </div>
      <div class="modal-footer">
        <a href="#" class="delete_branch btn btn-outline-red mr-auto" data-destroy="">Удалить</a>
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green">OK</button>
        <input type="hidden" name="id" id="branchId"> 
        {{ method_field('PUT') }}
        @csrf
      </div>
    </form>
  </div>
</div>