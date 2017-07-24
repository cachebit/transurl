<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title', '企业网盘') - Larapad 专注企业服务！</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 http://www.bootcdn.cn/ -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- 最新版本的 jquery 文件 http://www.bootcdn.cn/ -->
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 http://www.bootcdn.cn/ -->
    <script src="/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        @include('layouts._nav')
        @yield('content')
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        @include('layouts._footer')
      </div>
    </footer>

  </body>
</html>
