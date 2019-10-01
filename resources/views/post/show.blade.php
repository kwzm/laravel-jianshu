@extends("layout.main")

@section("content")
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <div style="display:inline-flex">
            <h2 class="blog-post-title">
                {{$post->title}}
            </h2>
            <a href="/posts/{{$post->id}}/edit" style="margin: auto">
                <span aria-hidden="true" class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a href="/posts/{{$post->id}}/delete" style="margin: auto">
                <span aria-hidden="true" class="glyphicon glyphicon-remove">
                </span>
            </a>
        </div>
        <p class="blog-post-meta">
            {{$post->created_at->toFormattedDateString()}} by
            <a href="#">
                Kassandra Ankunding2
            </a>
        </p>
        <p>
            {!!$post->content!!}
        </p>
        <div>
            <a class="btn btn-primary btn-lg" href="/posts/{{$post->id}}/zan" type="button">
                赞
            </a>
        </div>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            评论
        </div>
        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">
                <h5>
                    2017-05-28 10:15:08 by Kassandra Ankunding2
                </h5>
                <div>
                    这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论
                </div>
            </li>
        </ul>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            发表评论
        </div>
        <!-- List group -->
        <ul class="list-group">
            <form action="/posts/comment" method="post">
                <input name="_token" type="hidden" value="4BfTBDF90Mjp8hdoie6QGDPJF2J5AgmpsC9ddFHD">
                    <input name="post_id" type="hidden" value="62"/>
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
