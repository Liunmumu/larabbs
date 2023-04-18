<!-- 顶部导航栏 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- 网站LOGO -->
    <a class="navbar-brand " href="{{ url('/') }}">
      HappyBBS
    </a>
    <!-- 小屏幕上折叠导航栏 -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <!-- 左侧菜单栏，可按需添加 -->
      <ul class="navbar-nav"></ul>

      <!-- 右侧菜单栏 -->
      <ul class="navbar-nav navbar-right">
        <!-- 设置跳转 -->
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign in</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Sigh up</a></li>
      </ul>
    </div>
  </div>
</nav>
