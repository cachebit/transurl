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

    <script src="/js/translations.js"></script>
    <script>
    var option = {
        type: 'embed',
        expires: '86400000',
        trigger: 'load',
        invitecode: 'a71747b1-9b09-4282-b98d-166415d4e0aa',
        title: '重要！！！由于邮件系统原因，请确认核实您的邮箱，确保获取通知！',
        successMsg: '请登录邮箱，在收到的确认邮件中，点击确认链接'
    }
    sendcloud.subscribe(option)
    </script>

  </body>
</html>
