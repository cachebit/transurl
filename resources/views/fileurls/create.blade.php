@extends('app')
@section('title', '网站升级中，很快回来…… - Larapad 专注中小企业服务。')

@section('content')

<div class="col-sm-6 col-sm-offset-3">
  @include('shared.errors')
  @include('shared.messages')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title text-center">发布文章</h3>
    </div>
    <div class="panel-body">
      <form class="form" action="{{ route('fileurls.store') }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">名称</label>
          <input class="form-control" type="text" name="title" value="">
        </div>

        <div class="form-group">
          <label for="description">描述</label>
          <input class="form-control" type="text" name="description" value="">
        </div>

        <div class="form-group">
          <label for="url">百度云盘链接</label>
          <input class="form-control" type="text" name="url" value="">
        </div>

        <div class="form-group">
          <label for="password">百度云盘密码</label>
          <input class="form-control" type="text" name="password" value="">
        </div>

        <button type="submit" class="btn btn-block btn-lg btn-primary">提交</button>

      </form>
    </div>
  </div>
</div>

@stop
