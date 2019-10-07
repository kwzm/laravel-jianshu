@extends("layout.main")

@section("content")
<div class="col-sm-8 blog-main">
    <div>
        <div class="carousel slide" data-ride="carousel" id="carousel-example">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carousel-example">
                </li>
                <li data-slide-to="1" data-target="#carousel-example">
                </li>
                <li data-slide-to="2" data-target="#carousel-example">
                </li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img alt="..." src="http://ww1.sinaimg.cn/large/44287191gw1excbq6tb3rj21400migrz.jpg"/>
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img alt="..." src="http://ww3.sinaimg.cn/large/44287191gw1excbq5iwm6j21400min3o.jpg"/>
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img alt="..." src="http://ww2.sinaimg.cn/large/44287191gw1excbq4kx57j21400migs4.jpg"/>
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" data-slide="prev" href="#carousel-example">
                <span class="glyphicon glyphicon-chevron-left">
                </span>
            </a>
            <a class="right carousel-control" data-slide="next" href="#carousel-example">
                <span class="glyphicon glyphicon-chevron-right">
                </span>
            </a>
        </div>
    </div>
    <div style="height: 20px;">
    </div>
    <div>
        @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="/posts/{{$post->id}}">
                    {{$post->title}}
                </a>
            </h2>
            <p class="blog-post-meta">
                {{$post->created_at->toFormattedDateString()}} by
                <a href="/user/{{$post->user->id}}">
                    {{$post->user->name}}
                </a>
            </p>
            <p>
                {!!str_limit($post->content, 100, '...')!!}
                <p class="blog-post-meta">
                    赞 {{$post->zans_count}}  | 评论 {{$post->comments_count}}
                </p>
            </p>
        </div>
        @endforeach
        {{$posts->links()}}
    </div>
    <!-- /.blog-main -->
</div>
@endsection("content")
