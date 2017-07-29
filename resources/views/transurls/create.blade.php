@extends('app')

@section('content')

<div class="col-sm-8 col-sm-offset-2">
  @include('shared.messages')
  @include('shared.errors')
  <div class="panel panel-info">
    <div class="panel-heading">
      <h2 class="panel-title"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> 全网征集企业VI设计师 <small class="pull-right"> 爸爸，带我去玩</small></h2>
    </div>
    <div class="panel-body">
      <h4>一、简介</h4>
      <p>爸爸带娃(babadaiwa.com)致力于高端亲子用品市场的开拓。</p>
      <p>为了更好的开拓市场，公司亟需形象鲜明的LOGO以帮助公司建立品牌形象。</p>
      <p>现面向全网征集符合我公司品牌形象定位的设计师，帮助我公司设计LOGO，薪酬优厚！并有机会进一步进行全部VI设计，报酬更加优厚！</p>
      <p>我们希望寻找：</p>
      <ol>
        <li>不管你是否科班出身</li>
        <li>不管你有否为大公司设计过</li>
        <li>只要我们能看出你曾经作品中的那份热爱生活的心，能够打动同样热爱生活的我们</li>
        <li>我们就有机会合作</li>
      </ol>
      <br>
      <h4>二、报名方式</h4>
      <ol>
        <li>提供您以往一份或多份作品（为了保障您的权益，请保留您的版权信息）。</li>
        <li>简述您对生活中“爸爸带娃”的理解。</li>
        <li>以上信息请发送至：yep@yeppod.com</li>
        <li>报名截止2017年8月31日</li>
      </ol>
      <br/>
      <h4>三、报名确认</h4>
      @include('shared.notification')

      <h4>四、补充信息</h4>
      <ul>
        <li>对符合我公司理念的设计师我们将会以邮件形式通知，进行进一步的沟通</li>
        <li>一旦确认合作我们将签订完善的设计合同以保障双方权益</li>
        <li>本公司保留最终解释权利。</li>
      </ul>
      <br/>
      <img src="/img/bg.jpg" alt="" class="img-responsive">
    </div>
  </div>
</div>

@stop
