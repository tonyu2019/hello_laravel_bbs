@extends('index.layout._base')
@section('title', isset($category) ? $category->name : '帖子首页')
@section('body')
    <div class="row">
        <div class="col-lg-9 post-list">
            @if(isset($category))
                <div class="alert alert-info" role="alert">
                    {{ $category->name }} ：{{ $category->description }}
                </div>
                @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-pills">
                        <li role="presentation" @if(!is_active(url()->full(), request()->path().'?order=publish'))class="active"@endif><a href="{{request()->url()}}?order=default">最后回复</a></li>
                        <li role="presentation" @if(is_active(url()->full(), request()->path().'?order=publish'))class="active"@endif><a href="{{request()->url()}}?order=publish">最新发布</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                       @include('index.layout._post_list')
                    </ul>
                    {!! $posts->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 新建帖子
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection