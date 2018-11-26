@foreach($posts as $post)
    <li class="media">
        <div class="media-left">
            <a href="{{route('users.show', $post->user_id)}}">
                <img src="{{$post->user->avatar}}" class="media-object img-thumbnail" style="width: 52px; height: 52px;" alt="">
            </a>
        </div>
        <div class="media-body">
            <div class="media-heading">
                <a href="{{$post->link()}}">{{$post->title}}</a>
                <a class="pull-right" href="{{$post->link()}}" >
                    <span class="badge"> {{ $post->reply_count }} </span>
                </a>
            </div>
            <div class="media-body">
                <a href="{{route('categories.show', $post->category_id)}}">
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