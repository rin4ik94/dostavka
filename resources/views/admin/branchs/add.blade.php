<div class="modal fade" id="newStore" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Новый филиал</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('branchs.store')}}" method="POST" class="needs-validation" novalidate> 
      @csrf
      <div class="modal-body">
        <div class="form-group">
          <label class="form-label" for="storeBranchName">Название *</label>
          <input class="form-control" type="text" id="storeBranchName" name="name" required>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storeManager">Магазин *</label>
              <select class="custom-select" id="storeManager" name="manager_id" required>
                <option value="" selected disabled>Не выбран</option>
                @foreach($managers as $manager)
                  <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="form-label" for="storeRegion">Регион *</label>
              <select class="custom-select" id="storeRegion" name="region_id" required>
                <option value="" selected disabled>Не выбран</option>
                @foreach($regions as $region)
                  <option value="{{ $region['id'] }}">{{ $region['name_ru'] }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="storeAddress">Адрес *</label>
          <textarea class="form-control" id="storeAddress" name="address" required></textarea>
        </div>
        <div class="form-group">
        <label class="form-label" for="workingModes">Режим работи</label>
         @foreach($workingModes as  $workingMode)
         <div class="form-group row">
         <div class="col-6">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck{{$workingMode['id']}}" name="workingModes[]"
            value="{{$workingMode['id']}}">
            <label class="custom-control-label" for="customCheck{{$workingMode['id']}}">{{ $workingMode['name_ru'] }}</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-row">
              <div class="col">
                <select class="custom-select" name="time_start[]" disabled required>
                  <option value="" selected disabled>от</option>
                  @foreach($workingTimes as $workingTime)
                  <option value="{{$workingTime['hours']}}">{{$workingTime['hours']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col">
                <select class="custom-select" name="time_finish[]" disabled required>
                  <option value="" selected disabled>до</option>
                  @foreach($workingTimes as $workingTime)
                  <option value="{{$workingTime['hours']}}">{{$workingTime['hours']}}</option>
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
            <option value="1" selected>Активный</option>
            <option value="0">Неактивный</option>
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