<div class="modal fade order" id="Order" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Заказ № 154</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="order-aside">
          <section>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="editNameUz">Статус</label>
              </div>
              <div class="col-8">
                <select class="custom-select" id="storeManager" name="manager_id" required="">
                  <option value="1" selected>Новый</option>
                  <option value="2">Формируется</option>
                  <option value="3">В пути</option>
                  <option value="4">Доставлен</option>
                  <option value="5">Отменен</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="editNameUz">История</label>
              </div>
              <div class="col-8">
                <textarea class="form-control" rows="2" disabled>Тест</textarea>
              </div>
            </div>
          </section>
          <section>
            <h4 class="title">Клиенть</h4>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="editNameUz">Имя</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" value="Jalolddin" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="editNameUz">Телефон</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" value="+998903003363" disabled>
                <small class="form-text text-red">Клиент в черном списке</small>
              </div>
            </div>
          </section>
          <section>
            <h4 class="title">Магазин</h4>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label">Магазин</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" value="Makro" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="order_branch">Филиал</label>
              </div>
              <div class="col-8">
                <select class="custom-select" id="order_branch" name="order_branch" required="">
                  <option value="0" selected disabled>Невыбран</option>
                  <option value="1">Филиал 1 (Buyuk Ipak Yo`li 101-uy)</option>
                  <option value="2">Филиал 2 (Farg`ona Sh, Yuksalish ko`chasi 100-uy)</option>
                  <option value="3">Филиал 3 (Toshloq tumani, Eski shahar ko`chasi 100-uy)</option>
                </select>
              </div>
            </div>
          </section>
          <section>
            <h4 class="title">Доставка</h4>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="editNameUz">Регион</label>
              </div>
              <div class="col-8">
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
            </div>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="edit_order_street">Улица</label>
              </div>
              <div class="col-8">
                <input class="form-control" id="edit_order_street" type="text" name="edit_order_street" value="ул.Сфйлгох">
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-8 offset-4">
                <div class="form-row">
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
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="edit_order_desc">Комментарий</label>
              </div>
              <div class="col-8">
                <textarea class="form-control" id="edit_order_desc" name="edit_order_desc" rows="2">Ески бозор олдиан кирилади</textarea>
              </div>
            </div>
          </section>
          <section>
            <h4 class="title">Оплата</h4>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label">Способ оплаты</label>
              </div>
              <div class="col-8">
                <input class="form-control" value="Наличными" disabled>
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label">Сумма заказа</label>
              </div>
              <div class="col-8">
                <input class="form-control" value="5 000" disabled>
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="edit_order_delivery_price">Цена доставки</label>
              </div>
              <div class="col-8">
                <input class="form-control" id="edit_order_delivery_price" type="text" name="edit_order_delivery_price" value="5000">
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label">Сумма к оплате</label>
              </div>
              <div class="col-8">
                <input class="form-control" value="36 000" disabled>
              </div>
            </div>
          </section>
        </div>
        <div class="order-main">
          <h4 class="title">Заказ</h4>
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th width="74px">№</th>
                <th>Название</th>
                <th width="100px">Ценна</th>
                <th width="130px">Количество (15)</th>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-green">OK</button>
      </div>
    </div>
  </div>
</div>