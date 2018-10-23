<div class="modal fade" id="orderBranch" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content form-branch" action="/admin/orders/1" method="POST">
      {{ method_field('PUT') }}
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Выбрать филиал на заказ № <span class="orderId"></span></h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="list branch_list"></div>
      <div class="modal-footer">
        <input type="hidden" name="id" id="editOrderBranch">
        <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
        <button type="sumbit" class="btn btn-green">OK</button>
      </div>
    </form>
  </div>
</div>
