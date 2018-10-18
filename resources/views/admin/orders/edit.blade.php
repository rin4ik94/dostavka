<div class="modal fade" id="editOrder" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактирование заказа</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="form-label" for="editNameUz">Клент</label>
              <input class="form-control" type="text" value="Jalolddin" disabled>
            </div>
            <div class="form-group">
              <label class="form-label" for="editNameUz">Телефон</label>
              <input class="form-control" type="text" value="+998903003363" disabled>
            </div>
            <div class="form-group">
              <label class="form-label" for="editNameUz">Регион</label>
              <select class="custom-select" id="storeManager" name="manager_id" required="">
                <option value="0" selected disabled>Не выбран</option>
                <option value="1">Ishonch</option>
                <option value="2">Makro</option>
                <option value="3">Euro Spar</option>
                <option value="4">Дикси</option>
                <option value="5">Metro</option>
                <option value="6">Пятёрочка</option>
                <option value="7">Перекресток</option>
                <option value="8">Ашан</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="edit_order_street">Улица</label>
              <input class="form-control" id="edit_order_street" type="text" name="edit_order_street" value="ул.Сфйлгох">
            </div>
            <div class="form-group form-row">
              <div class="col">
                <label class="form-label" for="edit_order_house">Дом</label>
                <input class="form-control" id="edit_order_house" type="text" name="edit_order_house" value="2">
              </div>
              <div class="col">
                <label class="form-label" for="edit_order_body">Корп.</label>
                <input class="form-control" id="edit_order_body" type="text" name="edit_order_body" value="1">
              </div>
              <div class="col">
                <label class="form-label" for="edit_order_apartment">Кв.</label>
                <input class="form-control" id="edit_order_apartment" type="text" name="edit_order_apartment" value="130">
              </div>
            </div>
            <div>
              <label class="form-label" for="edit_order_desc">Примечение</label>
              <textarea class="form-control" id="edit_order_desc" name="edit_order_desc" rows="2">Ески бозор олдиан кирилади</textarea>
            </div>
            
            
            



          </div>
          <div class="col-8">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th width="100px">№</th>
                  <th>Название</th>
                  <th width="100px">Ценна</th>
                  <th width="160px">Количество (15)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Davon D'Amore</td>
                  <td>35 000</td>
                  <td>
                    <div class="counter-widget input-group input-group-sm">
                      <div class="input-group-prepend"><button class="btn btn-outline-red" type="button"><i class="icon">remove</i></button></div>
                      <input class="form-control" value="2 шт" disabled="" type="text">
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Davon D'Amore</td>
                  <td>35 000</td>
                  <td>
                    <div class="counter-widget input-group input-group-sm">
                      <div class="input-group-prepend"><button class="btn btn-outline-red" type="button"><i class="icon">clear</i></button></div>
                      <input class="form-control" value="1 шт" disabled="" type="text">
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Davon D'Amore</td>
                  <td>35 000</td>
                  <td>
                    <div class="counter-widget input-group input-group-sm">
                      <div class="input-group-prepend"><button class="btn btn-outline-red" type="button"><i class="icon">clear</i></button></div>
                      <input class="form-control" value="1 шт" disabled="" type="text">
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-green">OK</button>
      </div>
    </div>
  </div>
</div>
