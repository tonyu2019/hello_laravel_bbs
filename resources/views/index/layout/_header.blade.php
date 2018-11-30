<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">BBS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li @if(is_active(url()->current(), route('posts.index',[], false)))class="active"@endif><a href="{{ route('posts.index') }}">话题</a></li>
                <li @if(is_active(url()->current(), route('categories.show', 1, false)))class="active"@endif><a href="{{ route('categories.show', 1) }}">分享</a></li>
                <li @if(is_active(url()->current(), route('categories.show', 2, false)))class="active"@endif><a href="{{ route('categories.show', 2) }}">教程</a></li>
                <li @if(is_active(url()->current(), route('categories.show', 3, false)))class="active"@endif><a href="{{ route('categories.show', 3) }}">问答</a></li>
                <li @if(is_active(url()->current(), route('categories.show', 4, false)))class="active"@endif><a href="{{ route('categories.show', 4) }}">公告</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="/login">登录</a></li>
                <li><a href="/register">注册</a></li>
                @else
                    <li>
                        <a href="{{ route('posts.create') }}" title="创建帖子">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </li>
                    {{-- 消息通知标记 --}}
                    <li>
                        <a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">
                            <span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }} " title="消息提醒">
                                {{ Auth::user()->notification_count }}
                            </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                            </span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            @can('manage_contents')
                                <li>
                                    <a href="/admin">
                                        <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
                                        管理后台
                                    </a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{route('users.show', Auth::id())}}"><span class="glyphicon glyphicon-user"></span> 个人中心</a>
                            </li>
                            <li>
                                <a href="{{route('users.edit', Auth::id())}}"><span class="glyphicon glyphicon-edit"></span> 修改资料</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span>
                                    退出
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>