<div class="col-auto">
  <form method="GET" class="input-group">
    <input class="form-control deletable" name="q" type="text" placeholder="Поиск" value="{{ request()->has('q') ? request()->get('q') : '' }}">
    <div class="input-group-append">
      <button class="btn btn-light" type="submit">
        <i class="icon">search</i>
      </button>
    </div>
  </form>
</div>
