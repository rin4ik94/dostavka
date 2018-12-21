<template>
  <div class="modal fade drawer" id="drawer" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="drawer-user">
          user
        </div>
        <ul class="nav drawer-nav">
          <li class="nav-item">
            <a class="nav-link">{{$t('drawer.shops')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">{{$t('drawer.order')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">{{$t('drawer.orders')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">{{$t('drawer.data')}}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>