<!DOCTYPE HTML>
<html lang="ru">

<head>
    <title>Delivery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="print" href="/print.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
    @include('front.desktop.layouts.css')
    <script>
        window.App= {!! json_encode([
          'csrfToken' => csrf_token(),
        //   'user' => Auth::user(), 
      ]) !!};
    </script>
</head>

<body>
    {{-- @desktop --}} {{--
    @include('front.desktop.layouts.svg') --}}

    <div id="desktop" class="desktop">

        <router-view></router-view>
        {{--
        <awesome-spinner v-show="!showPage"></awesome-spinner> --}}
    </div>
    @include('front.desktop.layouts.scripts')

</body>

</html>