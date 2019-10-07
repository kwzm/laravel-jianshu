@extends("layout.main")
@section("content")
<div class="col-sm-8">
    <blockquote>
        <p>
            <img alt="" class="img-rounded" src="{{$user->avatar}}" style="border-radius:500px; height: 40px">
                {{$user->name}}
            </img>
        </p>
        <footer>
            关注：{{$user->star_count}}｜粉丝：{{$user->fans_count}}｜文章：{{$user->posts_count}}
        </footer>
        @include('user.badges.like', ['target_user' => $user])
    </blockquote>
</div>
<div class="col-sm-8 blog-main">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active">
                <a aria-expanded="true" data-toggle="tab" href="#tab_1">
                    文章
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" data-toggle="tab" href="#tab_2">
                    关注
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" data-toggle="tab" href="#tab_3">
                    粉丝
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                @foreach($posts as $post)
                <div class="blog-post" style="margin-top: 30px">
                    <p class="">
                        <a href="/user/{{$post->user->id}}">
                            {{$post->user->name}}
                        </a>
                        6天前
                    </p>
                    <p class="">
                        <a href="/posts/{{$post->id}}">
                            {{$post->title}}
                        </a>
                    </p>
                    <p>
                        <p>
                            {!!str_limit($post->content, 100, '...')!!}
                        </p>
                    </p>
                </div>
                @endforeach
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
                @foreach($susers as $user)
                <div class="blog-post" style="margin-top: 30px">
                    <p class="">
                        {{$user->name}}
                    </p>
                    <p class="">
                        关注：{{$user->stars_count}} | 粉丝：{{$user->fans_count}} | 文章：{{$user->posts_count}}
                    </p>
                    @include('user.badges.like', ['target_user' => $user])
                </div>
                @endforeach
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                @foreach($fusers as $user)
                <div class="blog-post" style="margin-top: 30px">
                    <p class="">
                        {{$user->name}}
                    </p>
                    <p class="">
                        关注：{{$user->stars_count}} | 粉丝：{{$user->fans_count}} | 文章：{{$user->posts_count}}
                    </p>
                    @include('user.badges.like', ['target_user' => $user])
                </div>
                @endforeach
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
</div>
<!-- /.blog-main -->
@endsection
