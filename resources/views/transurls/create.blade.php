@extends('app')
@section('title','CPComic! - 无CP，不漫画！ ╮(╯▽╰)╭')

@section('content')

<div class="col-sm-8 col-sm-offset-2">
  @include('shared.messages')
  @include('shared.errors')
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h2 class="panel-title">招聘兼职画手项目合作 <small class="pull-right"> 欢迎使用闪盘</small></h2>
    </div>
    <div class="panel-body">
      <h4>一、招聘短期兼职画手，合作愉快今后可长期合作！</h4>
      <p>小可爱们，左喵这厢有礼了，(๑•̀ㅂ•́)و✧。</p>
      <p>这次CPComic!团队发展需要一批画手做兼职，启动项目是3组头像的绘制，时间是8月底完稿，但是对风格要求比较特别，所以决定广泛寻找潜力队员（估计30-50人），分组画完。</p>
      <p>价格在每个100-300/个，具体根据画稿质量决定，数量大概是近200个，每个人分配数量根据能力而定，但是不关能力如何，画稿一定要认真 ( ˙-˙ )。</p>
      <hr/>
      <h4>二、具体要求</h4>
      <ol>
        <li>首先，这次只要头像，各种种族、风格、脑洞都可以挑战，只要接近我们的要求，我们会进行指导！</li>
        <li>发送一组或者几组擅长的头像风格样片，只要看一下风格，可以小图加上水印，我们不会盗用！</li>
        <li>图请砸这里：yep@yeppod.com。</li>
        <li>付款方式：画完一张确认后立即付款，再进行下一张创作。</li>
      </ol>
      <hr/>
      <h4>三、审核</h4>
      <p>由于8月底需要完成所有头像绘制，所以我们召募范围很广，所以预计会收到较多的稿件，我们会尽最大努力尽快审核并通过邮件系统批量通知。</p>
      <p>但是根据以往经验，由于量比较大，会有通知不到的情况发生，所以请核实邮箱，并及时查看。</p>
      <hr/>
      <h5>报名流程：</h5>
      <ol>
        <li>提交邮箱报名，并在收到邮件后进行确认（重要）。</li>
        <li>头像作品发送至yep@yeppod.com。</li>
        <li>等待通知。</li>
        <li>
          <p>邮件须同时附上以下信息：</p>
          <ul>
            <li>简单介绍自己擅长的绘画领域和期待发展的方向。</li>
            <li>期望薪酬：xxx元/幅头像。</li>
            <li>学生党/工作族</li>
            <li>合适的工作时间：工作日/周末节假日/全部，白天/晚上/全部。</li>
            <li>接受的最低任务数量。</li>
            <li>接受的最高任务数量。</li>
          </ul>
        </li>
      </ol>
      <br/>


      <h4>四、报名表</h4>
      @include('shared.notification')
      <br/>

      <h4>五、其它</h4>
      <ul>
        <li>本招聘有效期至：2017年8月15日23：59，之后我们就进入了紧张的集中创作期，不再接受新人。</li>
        <li>本喵保留最终解释权利。</li>
      </ul>
      <br/>
      <img src="/img/cpbg.png" alt="" class="img-responsive">
    </div>
  </div>
</div>

@stop
