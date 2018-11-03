<div class="modal fade" id="orderStatus" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content form-status" action="/admin/orderstatus/1" method="POST">
      {{ method_field('PUT') }}
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Статус заказа № <b class="orderStatusId">10</b></h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="list">
        <div class="list-item custom-control custom-radio">
          <input type="radio" id="orderStatus_1" name="order_status_id" value="1" class="custom-control-input">
          <label class="list-link custom-control-label" for="orderStatus_1">Новый</label>
        </div>
        <div class="list-item custom-control custom-radio">
          <input type="radio" id="orderStatus_2" name="order_status_id" value="2" class="custom-control-input">
          <label class="list-link custom-control-label" for="orderStatus_2">Формируется</label>
        </div>
        <div class="list-item custom-control custom-radio">
          <input type="radio" id="orderStatus_3" name="order_status_id" value="3" class="custom-control-input">
          <label class="list-link custom-control-label" for="orderStatus_3">В пути</label>
        </div>
        <div class="list-item custom-control custom-radio">
          <input type="radio" id="orderStatus_4" name="order_status_id" value="4" class="custom-control-input">
          <label class="list-link custom-control-label" for="orderStatus_4">Доставлен</label>
        </div>
        <div class="list-item custom-control custom-radio">
          <input type="radio" id="orderStatus_5" name="order_status_id" value="5" class="custom-control-input">
          <label class="list-link custom-control-label" for="orderStatus_5">Отменен</label>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" id="editOrderStatus">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="sumbit" class="btn btn-green check_branch_courier">OK</button>
      </div>
    </form>
  </div>
</div>
