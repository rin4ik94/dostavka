<template>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <h5 class="title">Покупателям</h5>
            <ul class="nav footer-nav">
              <li class="nav-item">
                <router-link :to="{name:'delivery'}">
                  Доставка и оплата
                </router-link>
              </li>
              <li class="nav-item">
                <router-link :to="{name:'return'}">
                  Возврат 
                </router-link>
              </li>

            </ul>
          </div>
          <div class="col-3">
            <h5 class="title">Магазинам</h5>
            <ul class="nav footer-nav">
              <li class="nav-item"><router-link :to="{name: 'partners'}">
                Как начать сотрудничество
                </router-link></li>
              <li class="nav-item"><a class="nav-link"  href="/cp">Войти в личный кабинет</a></li>

            </ul>
          </div>
          <div class="col-6 text-right">
            <h5 class="footer-phone"><a href="/">+998 (91) 7778811</a></h5>
            <ul class="nav footer-nav">
              <li class="nav-item footer-dev">Дизайн и разработка<a class="nav-link"  href="/">Prisma</a></li>
              <li class="nav-item footer-copy">© 2018 Dostavka</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</template>
