@extends("layout.main")

@section("content")
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <div style="display:inline-flex">
            <h2 class="blog-post-title">
                {{$post->title}}
            </h2>
            @can('update', $post)
            <a href="/posts/{{$post->id}}/edit" style="margin: auto">
                <span aria-hidden="true" class="glyphicon glyphicon-pencil">
                </span>
            </a>
            @endcan
            @can('delete', $post)
            <a href="/posts/{{$post->id}}/delete" style="margin: auto">
                <span aria-hidden="true" class="glyphicon glyphicon-remove">
                </span>
            </a>
            @endcan
        </div>
        <p class="blog-post-meta">
            {{$post->created_at->toFormattedDateString()}} by
            <a href="#">
                {{$post->user->name}}
            </a>
        </p>
        <p>
            {!!$post->content!!}
        </p>
        <div>
            @if ($post->zan(\Auth::id())->exists())
            <a class="btn btn-default btn-lg" href="/posts/{{$post->id}}/unzan" type="button">
                取消赞
            </a>
            @else
            <a class="btn btn-primary btn-lg" href="/posts/{{$post->id}}/zan" type="button">
                赞
            </a>
            @endif
        </div>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            评论
        </div>
        <!-- List group -->
        <ul class="list-group">
            @foreach($post->comments as $comment)
            <li class="list-group-item">
                <h5>
                    {{$comment->created_at}} by {{$comment->user->name}}
                </h5>
                <div>
                    {{$comment->content}}
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            发表评论
        </div>
        <!-- List group -->
        <ul class="list-group">
            <form action="/posts/{{$post->id}}/comment" method="post">
                    {{ csrf_field() }}
                    <li class="list-group-item">
                        <textarea class="form-control" name="content" rows="10">
                        </textarea>
                        <button class="btn btn-default" type="submit">
                            提交
                        </button>
                    </li>
                </input>
            </form>
        </ul>
    </div>
</div>
<!-- /.blog-main -->
@endsection("content")
