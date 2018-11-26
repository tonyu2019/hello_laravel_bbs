@extends('index.layout._base')
@section('title', $post->title)
@section('body')
<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-body">

                <div class="panel-body">
                    <h3>{{$post->title}}</h3>
                    <small>创建于 {{$post->created_at->diffForHumans()}} / 阅读数 {{$post->view_count}} / 评论数 {{$post->reply_count}}</small>
                    <hr>
                    <div class="article">{!! $post->body !!}</div>
                    <hr>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-xs" role="button">
                        <i class="glyphicon glyphicon-edit"></i> 编辑
                    </a>
                    <a href="#" class="btn btn-default btn-xs" role="button">
                        <i class="glyphicon glyphicon-trash"></i> 删除
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-body">
                @if($post->user->avatar)
                    <img class="img-responsive img-circle center-block" src="{{$post->user->avatar}}">
                @else
                    <img class="img-responsive img-circle" src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600">
                @endif
                <hr>
                <p class="text-center">{{$post->user->name}}<br>{{$post->user->email}}</p>
            </div>
        </div>
    </div>
</div>
    @endsection