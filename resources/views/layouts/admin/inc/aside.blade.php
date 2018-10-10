<aside class="aside">
  <ul class="nav aside-nav">
      @can('Магазины')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'managers' ? 'active' : null }}" href="/admin/managers">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#store"></use></svg>
      <span class="text">Магазины</span>
      </a></li>
      @endcan
      @can('Филиали')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'branchs' ? 'active' : null }}" href="/admin/branchs">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#map-pin"></use></svg>
      <span class="text">Филиали</span>
      </a></li>
      @endcan
      @can('Категории')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'categories' ? 'active' : null }}" href="/admin/categories">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#category"></use></svg>
      <span class="text">Категории</span>
      </a></li>
      @endcan
      @can('Продукты')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'products' ? 'active' : null }}" href="/admin/products">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#product"></use></svg>
      <span class="text">Продукты</span>
      <span class="badge badge-red">1</span>
      </a></li>
      @endcan
      @can('Заказы')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'orders' ? 'active' : null }}" href="/admin/orders">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#order"></use></svg>
      <span class="text">Заказы</span>
      <span class="badge badge-red">9</span>
      </a></li>
      @endcan
      @can('Отчеты')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'reports' ? 'active' : null }}" href="/admin/reports">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#journal"></use></svg>
      <span class="text">Отчеты</span>
      </a></li>
      @endcan
      @can('Транзакции')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'orders' ? 'active' : null }}" href="/admin/orders">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#transaction"></use></svg>
      <span class="text">Транзакции</span>
      </a></li>
      @endcan
      @can('Курьеры')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'couriers' ? 'active' : null }}" href="/admin/couriers">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#courier"></use></svg>
      <span class="text">Курьеры</span>
      </a></li>
      @endcan
      @can('Клиенты')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'clients' ? 'active' : null }}" href="/admin/clients">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#client"></use></svg>
      <span class="text">Клиенты</span>
      </a></li>
      @endcan
      @can('Сотрудники')
    <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'employees' ? 'active' : null }}" href="/admin/employees">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#employee"></use></svg>
      <span class="text">Сотрудники</span>
      </a></li>
      @endcan
      @can('Настройки')
      <li class="nav-item"><a class="nav-link {{ Request::segment(2) === 'settings' ? 'active' : null }}" href="/admin/settings">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#settings"></use></svg>
      <span class="text">Настройки</span>
      </a></li>
      @endcan
  </ul>
  <footer class="aside-footer">
    <div class="aside-copy">© 2018 Dostavka</div>
    <div class="aside-dev">Разработка и дизайн <a href="/">Prisma</a></div>
  </footer>
</aside>