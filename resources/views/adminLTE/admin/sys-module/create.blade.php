@extends('layout.collapsed-sidebar')
@section('styles')
    <link rel="stylesheet" href="/asset/AdminLTE-2.3.7/plugins/bootstrap-select/bootstrap-select.min.css" />
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        系统管理
        <small>模块管理</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">系统管理</a></li>
        <li><a href="#">模块管理</a></li>
        <li class="active">创建模块</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">创建模块</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{route('sys-module.store')}}">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" placeholder="名称" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="col-sm-2 control-label">描述</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="desc" placeholder="描述" name="desc">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icon" class="col-sm-2 control-label">图标</label>
                            <div class="col-sm-6">
                                <select class="form-control selectpicker" id="icon" name="icon">
                                    <option value="">--select--</option>
                                    @forelse($icons as $icon)
                                        <option value="{{$icon->value}}" data-content="<span class='{{$icon->value}}'></span>"></option>
                                        @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label">排序</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="sort" placeholder="排序" name="sort" value="0">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('sys-module.index')}}" class="btn btn-default">返回</a>
                        <button type="submit" class="btn btn-info pull-right">保存</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script src="/asset/AdminLTE-2.3.7/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/asset/AdminLTE-2.3.7/plugins/bootstrap-select/i18n/defaults-zh_CN.min.js"></script>
    <script type="text/javascript">
        $('.selectpicker').selectpicker();

    </script>
@endsection