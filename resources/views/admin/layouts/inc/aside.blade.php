<aside class="aside">
  <ul class="nav aside-nav">
      @can('Магазины')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'managers' ? 'active' : null }}" href="/admin/managers">
      <i class="icon">store</i>
      <span class="text">Магазины</span>
      </a></li>
      @endcan
      @can('Филиали')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'branchs' ? 'active' : null }}" href="/admin/branchs">
      <i class="icon">place</i>
      <span class="text">Филиали</span>
      </a></li>
      @endcan
      @can('Категории')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'categories' ? 'active' : null }}" href="/admin/categories">
      <i class="icon">category</i>
      <span class="text">Категории</span>
      </a></li>
      @endcan
      @can('Продукты')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'products' ? 'active' : null }}" href="/admin/products">
        <i class="icon">layers</i>
        <span class="text">Продукты</span>
      </a></li>
      @endcan
      @can('Заказы')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'orders' ? 'active' : null }}" href="/admin/orders">
        <i class="icon">notifications</i>
        <span class="text">Заказы</span>
        <span class="badge badge-red order_new_count">{{ cache('order_count') }} </span>
  </a></li>
      @endcan
      @can('Отчеты')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'reports' ? 'active' : null }}" href="/admin/reports">
      <i class="icon">list_alt</i>
      <span class="text">Отчеты</span>
      </a></li>
      @endcan
      @can('Транзакции')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'transactions' ? 'active' : null }}" href="/admin/transactions">
        <i class="icon">attach_money</i>
        <span class="text">Транзакции</span>
      </a></li>
      @endcan
      @can('Курьеры')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'couriers' ? 'active' : null }}" href="/admin/couriers">
      <i class="icon">local_shipping</i>
      <span class="text">Курьеры</span>
      </a></li>
      @endcan
      @can('Клиенты')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'clients' ? 'active' : null }}" href="/admin/clients">
      <i class="icon">wc</i>
      <span class="text">Клиенты</span>
      </a></li>
      @endcan
      @can('Сотрудники')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'employees' ? 'active' : null }}" href="/admin/employees">
        <i class="icon">group</i>
        <span class="text">Сотрудники</span>
      </a></li>
      @endcan
      @can('Настройки')
      <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'settings' ? 'active' : null }}" href="/admin/settings">
        <i class="icon">settings</i>
        <span class="text">Настройки</span>
      </a></li>
      @endcan
  </ul>
  <footer class="aside-footer">
    <div class="aside-copy">© 2018 Dostavka</div>
    <div class="aside-dev">Разработка и дизайн <a href="/">Prisma</a></div>
  </footer>
</aside>