<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
                    <meta content="" name="description">
                        <meta content="" name="author">
                            <title>
                                laravel for blog
                            </title>
                            <!-- Bootstrap core CSS -->
                            <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                                <!-- Custom styles for this template -->
                                <link href="/css/blog.css" rel="stylesheet">
                                    <link href="/css/wangEditor.min.css" rel="stylesheet" type="text/css">
                                        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                                        <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
                                    </link>
                                </link>
                            </link>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div class="blog-masthead">
            <div class="container">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="blog-nav-item " href="/posts">
                            首页
                        </a>
                    </li>
                    <li>
                        <a class="blog-nav-item" href="/posts/create">
                            写文章
                        </a>
                    </li>
                    <li>
                        <a class="blog-nav-item" href="/notices">
                            通知
                        </a>
                    </li>
                    <li>
                        <input class="form-control" name="query" placeholder="搜索词" style="margin-top:10px" type="text" value="">
                        </input>
                    </li>
                    <li>
                        <button class="btn btn-default" style="margin-top:10px" type="submit">
                            Go!
                        </button>
                    </li>
                </ul>
                @include("layout.nav")
            </div>
        </div>
        <div class="container">
            <div class="blog-header">
            </div>
            <div class="row">
                @yield("content")
 @include("layout.sidebar")
            </div>
        </div>
        <!-- /.row -->
    </body>
</html>
<!-- /.container -->
@include("layout.footer")
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js">
</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<script src="/js/wangEditor.min.js" type="text/javascript">
</script>
<script src="/js/ylaravel.js">
</script>
