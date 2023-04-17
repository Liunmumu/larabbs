<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <!-- 设置兼容性 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - HappyBBS</title>

  <!-- 引入编译后的CSS文件 -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app" class="{{ route_class() }}-page">
    <!-- 顶部模版 -->
    @include('layouts._header')

    <div class="container">

      <!-- 弹窗提醒 -->
      @include('shared._messages')

      @yield('content')
    </div>

    <!-- 底部模版 -->
    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}">
  </script>
</body>

</html>
