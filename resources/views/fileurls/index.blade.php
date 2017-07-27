@extends('app')
@section('title', '已发布文章 - Larapad 专注中小企业服务。')

@section('content')

<div class="col-sm-8 col-sm-offset-2">
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title text-center">已发布文章 <small><a href="{{ route('fileurls.create') }}">>>发布新的文章</a></small></h3>
    </div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <th>No.</th>
          <th>Title</th>
          <th>Description</th>
          <th>Taken</th>
        </thead>
        @foreach($urls as $transurl)
        <tr>
          <td>{{ $transurl->id }}</td>
          <td>{{ $transurl->title }}</td>
          <td>{{ $transurl->description }}</td>
          <td>
            @if($transurl->taken)
              已发包
            @else
              <b class="text-danger">未发包</b>
            @endif
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

@stop
