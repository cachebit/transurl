@extends('app')
@section('title', '网站升级中，很快回来…… - Larapad 专注中小企业服务。')

@section('content')

<div class="col-sm-8 col-sm-offset-2">
  <div class="panel panel-primary">
    <div class="panel-body">
      <h1>十分感谢！</h1>
      <p>我们已经收到了您的信息，请您下载译稿后尽快按要求翻译完成后发送给我们。我们会在8月15日以后尽快审核并将结果反馈给你。</p>
      <p>提示：译员报名时间和译稿邮件发送时间的差距将纳入工作效率的考量，敬请注意。</p>
      <div class="well">
        @if($url != null)
        <p>链接：<a href="{{ $url->url }}" target="_blank">{{ $url->url }}</a> 密码：{{ $url->password }}</p>
        @else
        <p>抱歉！系统维护中，请明天再试。如有疑问请发送邮件至：<br/>yep@yeppod.com</p>
        @endif
      </div>

      @include('shared.notification')
    </div>
  </div>
</div>

@stop
