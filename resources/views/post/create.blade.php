@extends("layout.main")

@section("content")
<div class="col-sm-8 blog-main">
    <form action="/posts" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label>
                    标题
                </label>
                <input class="form-control" name="title" placeholder="这里是标题" type="text">
                </input>
            </div>
            <div class="form-group">
                <label>
                    内容
                </label>
                <textarea class="form-control" id="content" name="content" placeholder="这里是内容" style="height:400px;max-height:500px;">
                </textarea>
            </div>
            @include('layout.error')
            <button class="btn btn-default" type="submit">
                提交
            </button>
        </input>
    </form>
    <br/>
</div>
@endsection("content")
