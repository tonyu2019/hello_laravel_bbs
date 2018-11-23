@extends('index.layout._base')
@section('title', '创建帖子')
@section('body')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center"><i class="glyphicon glyphicon-pencil"></i> @if(isset($post->id))更新帖子@else创建帖子@endif</h3>
                <hr>
                @include('index.layout._error')
                @if(isset($post->id))
                    <form method="post" action="{{route('posts.update', $post->id)}}">
                        {{method_field('PUT')}}
                    @else
                            <form method="post" action="{{route('posts.store')}}">
                    @endif
                                {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="请填写标题" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="category_id">
                            <option value="">请选择分类</option>
                            @foreach($catetories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="3" class="form-control" name="body" placeholder="请填入至少三个字符的内容。"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>
                </form>
            </div>
        </div>
    </div>
</div>
    @endsection