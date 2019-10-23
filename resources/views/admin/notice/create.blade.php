@extends("admin.layout.main")
@section("content")
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-10 col-xs-6">
            <div class="box">
                <!-- /.box-header -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            增加通知
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="/admin/notices" method="POST" role="form">
                        {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        标题
                                    </label>
                                    <input class="form-control" name="title" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        内容
                                    </label>
                                    <textarea class="form-control" name="content">
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">
                                    提交
                                </button>
                            </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
