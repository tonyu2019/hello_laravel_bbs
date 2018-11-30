@extends('admin.layout._base')
@section('body')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Post List</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Table Example</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>帖子列表</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered m-b-0 c_list">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="fancy-checkbox">
                                            <input class="select-all" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                    </th>
                                    <th>作者</th>
                                    <th>标题</th>
                                    <th>分类</th>
                                    <th>回复数量</th>
                                    <th>更新时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td style="width: 50px;">
                                        <label class="fancy-checkbox">
                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <img src="{{$post->user->avatar}}" class="rounded-circle avatar" alt="">
                                        <p class="c_name">{{$post->user->name}}</p>
                                    </td>
                                    <td>
                                        {{$post->title}}
                                    </td>
                                    <td>
                                        {{$post->category->name}}
                                    </td>
                                    <td><span class="text-primary"><i class="icon-bubbles"></i> {{$post->reply_count}}</span></td>
                                    <td>
                                        {{$post->updated_at}}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info" title="Edit"><i
                                                    class="fa fa-edit"></i></button>
                                        <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert"
                                                title="Delete"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$posts->links('vendor.pagination.admin')}}
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection