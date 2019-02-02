<div class="modal fade" id="Chat" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Чат</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">Чат с клентамы</div>
        <div class="">Чат с магазинами</div>
        <div class="">Чат с сотрудниками</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-green">Save changes</button>
      </div>
    </div>
  </div>
</div><div class="modal fade" id="Profile" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Профиль № {{Auth::user()->id}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div>ФИО: {{Auth::user()->name}}</div>
        <div>Телефон: +998{{Auth::user()->mobile}}</div>
        <div>Группа: {{Auth::user()->roles[0]->name ?? ''}}</div>
      </div>
    </div>
  </div>
</div>