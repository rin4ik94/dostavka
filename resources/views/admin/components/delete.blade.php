<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
            <h1 class="align-center text-center">Are you sure?</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Cencel</button>
          <button type="submit" class="btn btn-green">Delete</button>
          @csrf
        </div>
      </form>
    </div>
  </div>