<div class="modal fade" id="newStore" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{route('branchs.store')}}" method="POST" class="modal-content needs-validation" novalidate> 
      <div class="modal-header">
        <h5 class="modal-title">Новый филиал</h5>
        <button type="button" class="close" data-dismiss="modal">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeBranchName">Название *</label>
          <div class="col-8">
            <input class="form-control" type="text" id="storeBranchName" name="name" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeManager">Магазин *</label>
          <div class="col-8">
            <select class="custom-select" id="storeManager" name="manager_id" required>
              <option value="" selected disabled>Не выбран</option>
                @foreach($managers as $manager)
                  <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeRegion">Регион *</label>
          <div class="col-8">
            <select class="custom-select" id="storeRegion" name="region_id" required>
              <option value="" selected disabled>Не выбран</option>
                @foreach($regions as $region)
                  <option value="{{ $region['id'] }}">{{ $region['name_ru'] }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="storeAddress">Адрес *</label>
          <div class="col-8">
            <textarea class="form-control" id="storeAddress" name="address" required></textarea>
          </div>
        </div>
        <div class="form-group">
        <h5>Режим работи</h5>
         @foreach($workingModes as  $workingMode)
         <div class="form-group row">
         <div class="col-4 col-form-label">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck{{$workingMode['id']}}" name="workingModes[]"
            value="{{$workingMode['id']}}">
            <label class="custom-control-label" for="customCheck{{$workingMode['id']}}">{{ $workingMode['name_ru'] }}</label>
            </div>
          </div>
          <div class="col-8">
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
        <div class="form-group row">
          <label class="col-4 col-form-label" for="status">Статус</label>
          <div class="col-8">
            <select class="custom-select" name="status">
              <option value="1" selected>Активный</option>
              <option value="0">Неактивный</option>
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