@extends('index.layout._base')
@section('body')
    <div class="row">
        <div class="col-lg-9 post-list">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-pills">
                        <li role="presentation" class="active"><a href="#">最后回复</a></li>
                        <li role="presentation"><a href="#">最新发布</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        @foreach($posts as $post)
                        <li class="media">
                            <div class="media-left">
                                <a href="{{route('users.show', $post->user_id)}}">
                                    <img src="{{$post->user->avatar}}" class="media-object img-thumbnail" style="width: 52px; height: 52px;" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                                    <a class="pull-right" href="{{ route('posts.show', [$post->id]) }}" >
                                        <span class="badge"> {{ $post->reply_count }} </span>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                                        {{$post->category->name}}
                                    </a>
                                    <span> • </span>
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    <span class="timeago" title="最后活跃于">{{ $post->updated_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </li>
                            <hr>
                            @endforeach

                    </ul>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
        <div class="col-lg-3">右侧边栏</div>
    </div>
    @endsection