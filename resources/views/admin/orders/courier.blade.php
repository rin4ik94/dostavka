<div class="modal fade" id="orderCourier" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content form-courier" action="/admin/ordercourier/1" method="POST">
      {{ method_field('PUT') }}
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Назначить курьер на заказ № <span class="order_id_for_courier"></span></h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="list">
        <div class="list-item custom-control custom-radio">
          <input type="radio" id="orderCourier_0" name="courier_id" value="0" class="custom-control-input">
          <label class="list-link custom-control-label" for="orderCourier_0">Неназначен</label>
        </div>
        @foreach($couriers as $courier)
        <div class="list-item custom-control custom-radio">
        <input type="radio" id="orderCourier_{{ $courier->id }}" name="courier_id" value="{{ $courier->id }}" class="custom-control-input">
          <label class="list-link custom-control-label" for="orderCourier_{{ $courier->id }}">{{ $courier->fio }}</label>
        </div>
        @endforeach
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" id="editOrderCourier">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="sumbit" class="btn btn-green check_branch">OK</button>
      </div>
    </form>
  </div>
</div>