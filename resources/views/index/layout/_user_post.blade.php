<ul class="list-group">
    @foreach($posts as $post)
    <li class="list-group-item">
        <a href="">{{$post->title}}</a>
        <span class="meta pull-right">
                {{ $post->reply_count }} 回复
                <span> ⋅ </span>
            {{ $post->created_at->diffForHumans() }}
            </span>
    </li>
        @endforeach
</ul>
{{-- 分页 --}}
{!! $posts->render() !!}