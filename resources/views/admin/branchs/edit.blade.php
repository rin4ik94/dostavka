<div class="modal fade" id="editBranch" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактировать филиал</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin/branchs/1" method="POST" class="needs-validation" novalidate>
      {{ method_field('PUT') }}
      @csrf
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" name="id" id="branchId">
          <label class="form-label" for="editBranchName">Название *</label>
          <input class="form-control" type="text" id="editBranchName" name="name" required>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editManagerName">Магазин *</label>
              <select class="custom-select" id="editManagerName" name="manager_id" required>
                @foreach($managers as $manager)
                  <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="editRegionName">Регион *</label>
              <select class="custom-select" id="editRegionName" name="region_id" required>
                @foreach($regions as $region)
                  <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="editAddress">Адрес *</label>
          <textarea class="form-control" id="editAddress" name="address" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Режим работи *</label>
          @foreach($workingModes as  $workingMode)
         <div class="form-group row">
         <div class="col-6">
          <div class="custom-control custom-checkbox branCheckbox">
            <input type="checkbox" class="custom-control-input" id="branchEdit{{$workingMode->id}}" name="workingModes[]"
            value="{{$workingMode->id}}">
            <label class="custom-control-label" for="branchEdit{{$workingMode->id}}">{{ $workingMode->name_ru }}</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-row">
              <div class="col">
                <select class="custom-select timeStart" name="time_start[]" disabled>
                  <option selected disabled>от</option>
                  @foreach($workingTimes as $workingTime)
                  <option value="{{$workingTime->hours}}">{{$workingTime->hours}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col">
                <select class="custom-select timeFinish" name="time_finish[]" disabled>
                  <option selected disabled>до</option>
                  @foreach($workingTimes as $workingTime)
                  <option value="{{$workingTime->hours}}">{{$workingTime->hours}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
         @endforeach
        </div>
        <div class="form-group">
          <label class="form-label" for="status">Статус</label>
          <select class="custom-select" name="status">
            <option value="1" selected>Активен</option>
            <option value="0">Неактивен</option>
          </select>
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