@extends('app')

@section('content')

<div class="col-sm-8 col-sm-offset-2">
  @include('shared.messages')
  @include('shared.errors')
  <div class="panel panel-info">
    <div class="panel-heading">
      <h2 class="panel-title"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> 招淘宝美工 <small class="pull-right"> 爸爸，带我去玩</small></h2>
    </div>
    <div class="panel-body">
      <h4>招聘</h4>
      <p>公司因业务扩张，现招聘淘宝美工若干，要求：</p>
      <ol>
        <li>有1年以上从业经验</li>
        <li>做事认真负责</li>
        <li>根据能力发包，多劳多得，一旦一结</li>
        <li>招满即止</li>
      </ol>
      <br>
      <p>有意者请：</p>
      <ol>
        <li>提供您以往案例和服务过的淘宝商家店铺名称</li>
        <li>案例发送至：yep@yeppod.com</li>
      </ol>
      <br/>
      @include('shared.notification')
      <ul>
        <li>本公司保留最终解释权利。</li>
      </ul>
      <br/>
      <img src="/img/bg.jpg" alt="" class="img-responsive">
    </div>
  </div>
</div>

@stop
