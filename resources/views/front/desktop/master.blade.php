<!DOCTYPE HTML>
<html lang="ru">

<head>
    <title>Delivery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="print" href="/print.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('front.desktop.layouts.css')
    <script>
        window.App= {!! json_encode([
          'csrfToken' => csrf_token(),
          'deliveryPrice'=>config('dostavka.delivery_price')
        //   'user' => Auth::user(), 
      ]) !!};
    </script>
</head>

<body>
    {{-- @desktop --}} {{--
    @include('front.desktop.layouts.svg') --}}

    <div id="desktop" class="desktop">

        <router-view @ready="pageReady" v-show="showPage"></router-view>
        <div  v-show="!showPage" class="loader"><div class="loader-container"></div></div>
        
        {{--
        <awesome-spinner v-show="!showPage"></awesome-spinner> --}}
    </div>
    @include('front.desktop.layouts.scripts')

</body>

</html>