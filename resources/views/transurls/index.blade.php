@extends('app')
@section('title', '已报名用户 - Larapad 专注中小企业服务。')

@section('content')

<div class="col-sm-12">
  <div class="panel panel-danger">
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
          <th>Title</th>
          <th>Feedback</th>
          <th>Check</th>
        </thead>
        @foreach($transurls as $transurl)
        <tr>
          <td>{{ $transurl->id }}</td>
          <td>{{ $transurl->name }}</td>
          <td>{{ $transurl->email }}</td>
          <td>{{ $transurl->type }}</td>
          <td>
            @if($transurl->fileurl()->count())
            <a href="{{ route('fileurls.show',$transurl->fileurl->id) }}">
            {{ $transurl->fileurl->title }}
            </a>
            @endif
          </td>
          <td>
            @if($transurl->infoback)
              已译稿
            @else
              <b class="text-danger">未译稿</b>
            @endif
          </td>
          <td>
            <form class="form-inline" action="{{ route('transurls.update',$transurl->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}

              <div class="checkbox">
                <label>
                  <input name="infoback" type="checkbox" value='true'>
                </label>
              </div>

              <button class="btn btn-xs btn-success" type="submit" name="button">更新</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

@stop
