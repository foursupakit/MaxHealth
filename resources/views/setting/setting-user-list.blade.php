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
            <h1 class="page-title">ผู้ใช้งาน</h1>
            <span class="panel-desc">จำนวน 1 รายการ</span>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round btn-lg" data-target="#modalCreateUser" data-toggle="modal">
                    เพิ่มผู้ใช้งาน
                </button>
            </div>
            <div class="row no-gutters mt-20">
                <div class="col-md-6 col-lg-4">
                    <div class="input-search">
                        <i class="input-search-icon md-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="" placeholder="พิมพ์คำค้นหา">
                        <button type="button" class="input-search-close icon md-close" aria-label="Close"></button>
                    </div>
                </div>
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
                                        <th width="30%">ชื่อผู้ใช้งาน</th>
                                        <th>วันที่สมัคร</th>
                                        <th>เข้าใช้งานล่าสุด</th>
                                        <th>สิทธิ์การใช้งาน</th>
                                        <th>สถานะ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="/setting/user/detail">Admin</a></td>
                                        <td>29 มี.ค. 2564 14:31</td>
                                        <td>30 มี.ค. 2564 17:43</td>
                                        <td>Admin</td>
                                        <td>
                                            <span class="badge badge-success">ใช้งานได้</span>
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
