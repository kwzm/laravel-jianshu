@extends("layout.main")

@section("content")
<div class="col-sm-8 blog-main">
    <form action="/posts/62" method="POST">
        <input name="_method" type="hidden" value="PUT">
            <input name="_token" type="hidden" value="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy">
                <div class="form-group">
                    <label>
                        标题
                    </label>
                    <input class="form-control" name="title" placeholder="这里是标题" type="text" value="你好你好">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                        内容
                    </label>
                    <textarea class="form-control" id="content" name="content" placeholder="这里是内容" style="height:400px;max-height:500px;">
                        <p>你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好<img src="http://127.0.0.1:8000/storage/72c76b674ec8793fcfd6555ff371bfbd/nxC9ozLfkORmoY92q9lPsejXchVvdNO2cwHiR2Jf.jpeg" alt="63" style="max-width: 100%;">你好你好似懂非懂说</p><p><br></p>
                    </textarea>
                </div>
                <button class="btn btn-default" type="submit">
                    提交
                </button>
            </input>
        </input>
    </form>
    <br>
    </br>
</div>
@endsection("content")
