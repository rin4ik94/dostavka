<template>
<div>
    <div class="modal fade" id="product" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row">
          <div class="col-auto f-product-image">
            <div class="f-product-image-inner">
              <img class="f-product-img" src="http://dostavka.loc/img/001.jpg" alt="">
            </div>
          </div>
          <div class="col f-product-content">
            <div class="f-product-content-inner">
             
              <h1 class="title f-product-title">Напиток молочно-кофейный Grand Cafe, 2,6%</h1>
              <div class="f-product-segment"><a href="/">Продукты</a> / <a href="/">Молочные продукты</a></div>

              
              <div class="f-product-quantity">5 000 сум за 1 шт</div>
              <div class="f-product-price">
                <div class="f-product-price-new">5 000 сум</div>
                <div class="f-product-price-old"></div>
              </div>
              <div class="row mt-auto">
                <div class="col">
                  <div class="counter-widget input-group">
                    <div class="input-group-prepend"><button class="btn btn-outline-red" type="button" disabled=""><i class="icon">clear</i></button></div>
                    <input class="form-control" value="1 шт" disabled="" type="text">
                    <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                  </div>
                </div>
                <div class="col">
                  <button class="btn btn-block btn-green">Добавить в корзину</button>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
