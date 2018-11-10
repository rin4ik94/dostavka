<div class="modal fade order" id="Order" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form class="modal-content form-order" action="/admin/orders/1" method="POST">
        {{ method_field('PUT') }}
        @csrf
      <div class="modal-header">
        <h5 class="modal-title">Заказ № <span class="order_modal_title"></span></h5>
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
                <select class="custom-select" id="statusOrder" name="order_status_id" required disabled>
                  <option value="1">Новый</option>
                  <option value="2">Формируется</option>
                  <option value="3">В пути</option>
                  <option value="4">Доставлен</option>
                  <option value="5">Отменен</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="orderStory">История</label>
              </div>
              <div class="col-8">
                <textarea class="form-control" rows="2" id="orderStory" disabled></textarea>
              </div>
            </div>
          </section>
          <section>
            <h4 class="title">Клиент</h4>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="orderClientName">Имя</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" id="orderClientName" value="" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="orderClientMobile">Телефон</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" id="orderClientMobile" value="" disabled>
                {{-- <small class="form-text text-red">Клиент в черном списке</small> --}}
              </div>
            </div>
          </section>
          <section>
            <h4 class="title">Магазин</h4>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="orderManagerName">Магазин</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" id="orderManagerName" value="" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="ordeBranches">Филиал <span class="text-red">*</span></label>
              </div>
              <div class="col-8">
                <select class="custom-select" id="orderBranches" name="branch_id" required>
                  <option value="" selected disabled>Не выбран</option>
                </select>
              </div>
            </div>
          </section>
          <section>
            <h4 class="title">Доставка</h4>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="orderRegions">Регион <span class="text-red">*</span></label>
              </div>
              <div class="col-8">
                <select class="custom-select" id="orderRegions" name="region_id" required>
                  <option value="" selected disabled>Не выбран</option>
                  @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="deliveryStreet">Улица <span class="text-red">*</span></label>
              </div>
              <div class="col-8">
                <input class="form-control" id="deliveryStreet" type="text" name="delivery_address_street" value="" required>
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-8 offset-4">
                <div class="form-row">
              <div class="col">
                <label class="form-label" for="deliveryHome">Дом</label>
                <input class="form-control" id="deliveryHome" type="text" name="delivery_address_home" value="">
              </div>
              <div class="col">
                <label class="form-label" for="deliveryFloor">Корп.</label>
                <input class="form-control" id="deliveryFloor" type="text" name="delivery_address_floor" value="">
              </div>
              <div class="col">
                <label class="form-label" for="deliveryApartment">Кв.</label>
                <input class="form-control" id="deliveryApartment" type="text" name="delivery_address_apartment" value="">
              </div>
            </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="deliveryRemark">Комментарий</label>
              </div>
              <div class="col-8">
                <textarea class="form-control" id="deliveryRemark" name="delivery_address_remark" rows="2"></textarea>
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
                <input class="form-control" id="payment" value="Наличными" disabled>
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label">Сумма заказа</label>
              </div>
              <div class="col-8">
                <input class="form-control orderPrice" id="orderPrice" disabled>
              </div>
            </div>
            <div class="form-group form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="deliveryPrice">Цена доставки</label>
              </div>
              <div class="col-8">
                <input class="form-control" id="deliveryPrice" type="text" name="delivery_price" value="">
              </div>
            </div>
            <div class="form-row">
              <div class="col-4 col-form-label">
                <label class="form-label" for="totalPrice">Сумма к оплате</label>
              </div>
              <div class="col-8">
                <input class="form-control totalPrice" id="totalPrice" disabled>
              </div>
            </div>
          </section>
        </div>
        <div class="order-main">
          <h4 class="title">Заказ</h4>
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th width="50px">№</th>
                <th>Название</th>
                <th>Ценна</th>
                <th width="50px">Ед. изм.</th>
                <th width="130px">Количество <span class="product_total_count"></span></th>
              </tr>
            </thead>
            <tbody class="order_products">
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" id="editOrder" name="id">
        <input type="hidden" id="orderProductSet" name="productSet">
        <input type="hidden" class="totalPrice" name="total_price">
        <input type="hidden" class="orderPrice" name="order_price">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-green check_order">OK</button>
      </div>
      </form>
    </div>
  </div>
</div>
