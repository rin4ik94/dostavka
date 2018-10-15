<div class="modal fade" id="newStoreCategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Новая категория магазина</h5>
                <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('managers.group.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="store_name_ru">Название (RU) *</label>
                        <input class="form-control" type="text" id="store_name_ru" name="name_ru" required>
                    </div>
                    <div>
                        <label class="form-label" for="store_name_uz">Название (UZ) *</label>
                        <input class="form-control" type="text" id="store_name_uz" name="name_uz" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-green">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>
