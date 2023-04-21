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
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link {{ active_class(if_route('topics.index')) }}" href="{{ route('topics.index') }}">Topics</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}" href="{{ route('categories.show', 1) }}">Share</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}" href="{{ route('categories.show', 2) }}">Course</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}" href="{{ route('categories.show', 3) }}">Q&A</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}" href="{{ route('categories.show', 4) }}">Announcement</a></li>
      </ul>

      <!-- 右侧菜单栏 -->
      <ul class="navbar-nav navbar-right">
        <!-- 判断登录状态 -->
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">Personal center</a>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">Edit information</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button class="btn btn-block btn-danger" type="submit" name="button">Logout</button>
                </form>
              </a>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
