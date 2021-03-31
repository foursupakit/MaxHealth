@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">สิทธิ์การใช้งาน</h1>
            <span class="panel-desc">จำนวน 3 รายการ</span>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round btn-lg" onclick="location.href='/setting/role/create'">
                    เพิ่มสิทธิ์การใช้งานใหม่
                </button>
            </div>
        </div>
        <div class="page-content container-fluid">
            <!-- Panel Input Groups -->
            <div class="panel">
                @include('setting.modal')
                <div class="panel-body container-fluid p-0">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th width="80%">ชื่อสิทธิ์การใช้งาน</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Admin</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Edit" onclick="location.href='/setting/role/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Edit" onclick="location.href='/setting/role/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Staff</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Edit" onclick="location.href='/setting/role/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Plugins -->
    <script src="../../../global/vendor/peity/jquery.peity.min.js"></script>

    <!-- Page -->
    <script src="../../../global/js/Plugin/peity.js"></script>
    <script src="../../../global/js/Plugin/asselectable.js"></script>
    <script src="../../../global/js/Plugin/selectable.js"></script>
    <script src="../../../global/js/Plugin/table.js"></script>

    <script src="../../assets/examples/js/charts/peity.js"></script>
@endsection
