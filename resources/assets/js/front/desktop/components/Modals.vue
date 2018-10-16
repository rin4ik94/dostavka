<template>
<div>
  
<div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="title">Вход</h2>
        <div class="form-group">
          <div class="input-group">
            <label class="input-group-prepend" for="login_phone">
              <span class="input-group-text">+998</span>
            </label>
            <input class="form-control" type="text" id="login_phone" placeholder="Телефон">
          </div>
        </div>
        <button class="btn btn-block btn-green">Получить код для входа</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade profile" id="profile" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Мой профиль</h5>
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="profile-card-ava" style="background-color: #ffe93c">XJ</div>
        <h3 class="profile-card-name">Xolmatov Jaloliddin</h3>
        <div class="profile-card-region">с 11 апр. 2016</div>
        <dl class="profile-card-info">
          <dt>Регион:</dt><dd>Ферганская область</dd>
          <dt>Дата рождения:</dt><dd>09.11.1993</dd>
          <dt>Пол:</dt><dd>Мужчина</dd>
          <dt>Телефон:</dt><dd>+99891 672 0193</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button class="btn btn-block btn-light" type="button">Редактировать</button>
      </div>
    </div>
  </div>
</div>
</div>
</template>
