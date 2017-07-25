@extends('app')

@section('content')

<div class="col-sm-8 col-sm-offset-2">
  @include('shared.messages')
  @include('shared.errors')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h2 class="panel-title">招聘兼职翻译长期合作 <small class="pull-right"> 欢迎使用 Larapad 闪盘</small></h2>
    </div>
    <div class="panel-body">
      <h4>一、招聘</h4>
      <p>本公司因业务发展需要，现招聘：</p>
      <ol>
        <li>资深兼职译员3名</li>
        <li>兼职译员8名</li>
      </ol>
      <p>资深兼职译员价格看译稿商谈。兼职译员千字60~100元。</p>
      <p>每人每月1万~5万字左右，可依据能力增减。</p>
      <p>文章为同一领域专业文章，英译中。</p>
      <p>视项目发展状况，合作周期预计为1~3年之间（资深译员须长期合作，兼职译员可以阶段性合作）。</p>
      <br/>
      <h4>二、要求</h4>
      <ol>
        <li>认真敬业，能够按照要求及时完成翻译任务。</li>
        <li>稿件务必仔细校对，不得保留生硬机器翻译。</li>
        <li>对无法用中文直观表达含义的语句须采用直译，并<b><u>同时</u></b>保留原文。</li>
        <li>资深译员另须注意整体文风统一和语言的通俗化，确保可读群体的广泛性。</li>
        <li>能接受一定程度的加急（每月不超过2次）。</li>
        <li>因合作周期较长，不接受频繁周期性变动的资深译员。</li>
        <li>兼职译员可以接受周期性变动。</li>
        <li>报名截止：2017年8月15日23：59，以邮件接收时间为准。</li>
      </ol>
      <br/>
      <h4>三、审核</h4>
      <p>由于翻译内容较为专业，需要试译样稿一篇，我公司将于8月15日后组织审核，择优录取，长期合作。</p>
      <p></p>
      <h5>样稿翻译流程：</h5>
      <ol>
        <li>填写报名表后提交，获取试译稿。</li>
        <li>报名务必注意选择兼职译员或资深兼职译员。</li>
        <li>翻译完成后译稿发送至：job@larapad.com。</li>
        <li>
          <p>邮件须同时附上以下信息：</p>
          <ul>
            <li>简单自我介绍和从业经历。</li>
            <li>应聘岗位：资深兼职译员/兼职译员。</li>
            <li>期望薪酬：xxx元/千字。</li>
            <li>合适的工作时间：工作日/周末节假日/全部，白天/晚上/全部。(兼职译员请注明每年可以合作的时段)</li>
            <li>每<b><u>月</u></b>接受的最低译稿字数。</li>
            <li>每<b><u>周</u></b>接受的最高译稿字数。</li>
            <li>结算周期：周结/月结/二者皆可。</li>
          </ul>
        </li>
      </ol>
      <br/>


      <h4>四、报名表</h4>
      <div class="well">
        <hr>
        <form class="form-horizontal" method="POST" action="{{ route('transurls.store') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">您的邮箱：</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" placeholder="您的邮箱">
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">您的称呼：</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" name="name" placeholder="您的称呼">
            </div>
          </div>
          <div class="form-group">
            <div class="radio col-sm-offset-2">
              <label>
                <input type="radio" name="type" value="译员" checked>
                应聘兼职译员
              </label>
            </div>
            <div class="radio col-sm-offset-2">
              <label>
                <input type="radio" name="type" value="资深译员">
                应聘资深兼职译员
              </label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">提交信息，获取样稿</button>
            </div>
          </div>
        </form>
      </div>
      <br/>

      <h4>五、其它</h4>
      <ul>
        <li>本招聘有效期至：2017年8月15日23：59。</li>
        <li>诚邀各界精英合作，携手共创未来。</li>
        <li>larapad.com 保留最终解释权利。</li>
      </ul>
      <br/>
      <img src="/img/handshake.jpg" alt="" class="img-responsive">
    </div>
  </div>
</div>

@stop
