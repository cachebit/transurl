@extends('app')
@section('title', $url->title)

@section('content')

<div class="col-sm-6 col-sm-offset-3">
  <div class="panel panel-primary">
    <div class="panel-body">
      <h3>{{ $url->title }}</h3>
      <hr/>
      <p>{{ $url->description }}</p>
      <p>百度云盘链接：<a href="{{ $url->url }}">{{ $url->url }}</a></p>
      <p>密码：{{ $url->password }}</p>
    </div>
  </div>
</div>

@stop
