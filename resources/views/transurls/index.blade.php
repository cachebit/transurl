@extends('app')
@section('title', '已报名用户 - Larapad 专注中小企业服务。')

@section('content')

<div class="col-sm-8 col-sm-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title text-center">已报名用户</h3>
    </div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <th>No.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          <th>Feedback</th>
        </thead>
        @foreach($transurls as $transurl)
        <tr>
          <td>{{ $transurl->id }}</td>
          <td>{{ $transurl->name }}</td>
          <td>{{ $transurl->email }}</td>
          <td>{{ $transurl->type }}</td>
          <td>{{ $transurl->infoback }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

@stop
