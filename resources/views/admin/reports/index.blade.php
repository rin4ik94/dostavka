@extends('admin.layouts.dashboard')
@section('content')
<div class="toolbar">
    <form class="form-row" method="GET">
        <div class="col-auto">
            <select class="custom-select" name="section" onchange="this.form.submit()">
                <option value="1" @if(request()->section == '1' || !request()->section) selected @endif>По магазинам</option>
                <option value="2" @if(request()->section == '2') selected @endif>По филиалам</option>
                <option value="3" @if(request()->section == '3') selected @endif>По заказам</option>
                <option value="4" @if(request()->section == '4') selected @endif>По курьерам</option>
            </select>
        </div>
        <div class="col-auto">
            <input class="form-control" type="date" value="{{ request()->of_date ?? Carbon\Carbon::now()->format('Y-m-d') }}" name="of_date"onchange="this.form.submit()">
        </div>
        <div class="col-auto">
            <div class="input-group">
                <input class="form-control" type="date" value="{{ request()->to_date ?? Carbon\Carbon::now()->format('Y-m-d') }}" name="to_date" onchange="this.form.submit()">
            </div>
        </div>
    </form>
</div>

@if ($orders['order_type'] == 'manager')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="250px">№ магазина</th>
            <th>Названия магазина</th>
            <th width="250px">Количество заказов</th>
            <th width="250px">Сумма покупки</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders['orders'] as $manager)
        <tr>
            <td>{{ $manager['order']['id'] }}</td>
            <td>{{ $manager['order']['manager']['name'] }}</td>
            <td>{{ $manager['order_count'] }}</td>
            <td>{{ number_format($manager['total_amount'],'0',' ',' ') }} сум</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
    <div class="main-bottom-info">
        <strong>Итого: {{ number_format($orders['order_total_price'],'0',' ',' ') }} сум</strong>
    </div>
</div>
@endif

@if ($orders['order_type'] == 'branch')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="250px">№ филиала</th>
            <th>Названия филиала</th>
            <th width="250px">Количество заказов</th>
            <th width="250px">Сумма покупки</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders['orders'] as $branch)
        <tr>
            <td>{{ $branch['order']['branch']['id'] }}</td>
            <td>{{ $branch['order']['branch']['name'].', '.$branch['order']['branch']['address'] }}</td>
            <td>{{ $branch['order_count'] }}</td>
            <td>{{ number_format($branch['total_amount'],'0',' ',' ') }} сум</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
    <div class="main-bottom-info">
        <strong>Итого: {{ number_format($orders['order_total_price'],'0',' ',' ') }} сум</strong>
    </div>
</div>
@endif
@if($orders['order_type'] == 'order')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="250px">Статус заказа</th>
            <th>Количество заказов</th>
            <th width="250px">Сумма заказов</th>
            <th width="250px">Сумма доставки</th>
            <th width="250px">Общая сумма</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders['orders'] as $order)
        <tr>
            <td>{{ $order['order_status_name'] }}</td>
            <td>{{ $order['order_count'] }}</td>
            <td>{{ number_format($order['total_amount'],'0',' ',' ') }} сум</td>
            <td>{{ number_format($order['delivery_price'],'0',' ',' ') }} сум</td>
            <td>{{ number_format($order['total_delivery_price'],'0',' ',' ') }} сум</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@if($orders['order_type'] == 'courier')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="250px">№ курьера</th>
            <th>ФИО</th>
            <th width="250px">Количество заказов</th>
            <th width="250px">Сумма доставки</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders['orders'] as $courier)
        <tr>
        <td>{{ $courier['order']['courier']['id'] }}</td>
        <td>{{ $courier['order']['courier']['fio'] }}</td>
        <td>{{ $courier['order_count'] }}</td>
        <td>{{ $courier['total_amount'] }} сум</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="main-bottom d-flex align-items-center">
    <div class="main-bottom-info">
        <strong>Итого: {{ $orders['order_total_price'] }} сум</strong>
    </div>
</div>
@endif
@endsection