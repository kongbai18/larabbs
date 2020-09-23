@extends('layouts.app')

@section('title', $user->name . '的个人中心' )

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
      <div class="card">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
          <h5><stong>个人简介</stong></h5>
          <p>lorem ipsum dsds</p>
          <hr>
          <h5><strong>注册于</strong></h5>
          <p>january 1 1994</p>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-body">
          <h1 class="mb-0" style="font-size: 22px">{{ $user->name }} <small>{{ $user->email }}</small></h1>
        </div>
      </div>

      <hr>

      <div class="card">
        <div class="card-body text-center">
          暂无数据 ~_~
        </div>
      </div>
    </div>
  </div>
@stop
