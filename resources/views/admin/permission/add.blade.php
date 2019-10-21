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
                            增加权限
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="/admin/permissions/store" method="POST" role="form">
                        {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>
                                        权限名
                                    </label>
                                    <input class="form-control" name="name" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>
                                        描述
                                    </label>
                                    <input class="form-control" name="description" type="text">
                                    </input>
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
