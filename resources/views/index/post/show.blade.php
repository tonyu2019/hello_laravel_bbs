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
                    @can('update', $post)
                    <hr>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-xs" role="button">
                        <i class="glyphicon glyphicon-edit"></i> 编辑
                    </a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-default btn-xs pull-left" style="margin-left: 6px">
                            <i class="glyphicon glyphicon-trash"></i>
                            删除
                        </button>
                    </form>
                        @endcan
                </div>
            </div>
        </div>
        {{-- 用户回复列表 --}}
        <div class="panel panel-default post-reply">
            <div class="panel-body">
                @includeWhen(Auth::check(), 'index.post._reply_box', ['post' => $post])
                <div class="reply-list">
                    @foreach ($post->replies()->with('user')->get() as $index => $reply)
                        <div class="media"  name="reply{{ $reply->id }}" id="reply{{ $reply->id }}">
                            <div class="avatar pull-left">
                                <a href="{{ route('users.show', [$reply->user_id]) }}">
                                    <img class="media-object img-thumbnail" alt="{{ $reply->user->name }}" src="{{ $reply->user->avatar }}"  style="width:48px;height:48px;"/>
                                </a>
                            </div>

                            <div class="infos">
                                <div class="media-heading">
                                    <a href="{{ route('users.show', [$reply->user_id]) }}" title="{{ $reply->user->name }}">
                                        {{ $reply->user->name }}
                                    </a>
                                    <span> •  </span>
                                    <span class="meta" title="{{ $reply->created_at }}">{{ $reply->created_at->diffForHumans() }}</span>
                                    @can('delete', $reply)
                                    {{-- 回复删除按钮 --}}
                                    <span class="meta pull-right">
                        <form action="{{ route('replies.destroy', $reply->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-default btn-xs pull-left">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </form>
                    </span>
                                        @endcan
                                </div>
                                <div class="reply-content">
                                    {!! $reply->content !!}
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
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