@extends("admin.layout.main")
@section("content")
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-10 col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        权限列表
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="/admin/roles/{{$role->id}}/permission" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                @foreach($permissions as $permission)
                                <div class="checkbox">
                                    <label>
                                        <input name="permissions[]" type="checkbox"
                                            @if ($myPermissions->contains($permission)) 
                                            checked
                                            @endif
                                            value="{{$permission->id}}">
                                            {{$permission->name}}
                                        </input>
                                    </label>
                                </div>
                                @endforeach
                            </div>
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
