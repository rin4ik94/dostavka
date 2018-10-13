<header class="header">
  <div class="header-logo">
    <a class="header-logo-link" href="/admin/dashboard"></a>
  </div>
  <ul class="nav header-main-nav">
    @if(request()->segment(2) == 'managers')
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='managers' ? 'active' : '' }}" href="/admin/managers">Список магазинов</a></li>
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='group' ? 'active' : '' }}" href="/admin/managers/group">Категория магазинов</a></li>
    @elseif(request()->segment(2) == 'branchs')
    <li class="nav-item"><a class="nav-link active" href="/admin/branchs">Список филиалов</a></li>
    @elseif(request()->segment(2) == 'categories' )
    <li class="nav-item"><a class="nav-link active" href="/admin/categories">Список категории</a></li>
    @elseif(request()->segment(2) == 'products')
    <li class="nav-item"><a class="nav-link active" href="/admin/products">Список продукты</a></li>
    @elseif(request()->segment(2) == 'orders')
    <li class="nav-item"><a class="nav-link active" href="/admin/orders">Список заказы</a></li>
    @elseif(request()->segment(2) == 'reports')
    <li class="nav-item"><a class="nav-link active" href="/admin/reports">Список курьеров</a></li>
    @elseif(request()->segment(2) == 'orders')
    <li class="nav-item"><a class="nav-link active" href="/admin/orders">Список Заказы</a></li>
    @elseif(request()->segment(2) == 'clients')
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='clients' ? 'active' : '' }}" href="/admin/clients">Список клиентов</a></li>
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='group' ? 'active' : '' }}" href="/admin/clients/group">Группа клиентов</a></li>
    @elseif(request()->segment(2) == 'employees')
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='employees' ? 'active' : '' }}" href="/admin/employees">Список сотрудников</a></li>
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='group' ? 'active' : '' }}" href="/admin/employees/group">Группа сотрудников</a></li>
    @elseif(request()->segment(2) == 'settings')
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='settings' ? 'active' : '' }}" href="/admin/settings">Общие настройки</a></li>
    <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='orders' ? 'active' : '' }}" href="/admin/settings/orders">Заказы</a></li>
      <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='goto' ? 'active' : '' }}" href="/admin/settings/goto">Доставка</a></li>
      <li class="nav-item">
      <a class="nav-link {{ collect(request()->segments())->last()==='payment' ? 'active' : '' }}" href="/admin/settings/payment">Оплата</a></li>
    @endif
  </ul>
  <ul class="nav header-profile-nav">
    <li class="nav-item" data-toggle="modal" data-target="#Chat">
      <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Чат">
        <div >
        <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#chat"></use></svg>
        <span class="badge badge-red">9</span>
        </div>
      </a>
    </li>
   <li class="nav-item" data-toggle="modal" data-target="#Profile">
    <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Профиль">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#user"></use></svg>
    </a>
    </li>
   <li class="nav-item" data-toggle="modal" data-target="#confirm">
    <a class="nav-link" data-toggle="tooltip" href="#" data-placement="bottom" title="Выйти" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
       </form>
      <svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#logout"></use></svg>
    </a>
    </li>
  </ul>
</header>