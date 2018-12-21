<template>
    <footer class="footer">
      <div class="container">
        <div class="row">

          <div class="col-6 col-lg-3 mb-2 mb-lg-0">
            <h5 class="title">Покупателям</h5>

          <div class="col-12 col-lg-3 mb-2 mb-lg-0">
            <h5 class="title">{{$t('footer.buyers')}}</h5>

            <ul class="nav footer-nav">
              <li class="nav-item">
                <router-link :to="{name:'delivery'}">
                  {{$t('footer.delivery')}}
                </router-link>
              </li>
              <li class="nav-item">
                <router-link :to="{name:'return'}">
                  {{$t('footer.refund')}} 
                </router-link>
              </li>

            </ul>
          </div>
          </div>
      </div>
      </div>
    </footer>
</template>