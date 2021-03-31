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
            <h1 class="page-title">รายการคืนสินค้า</h1>
            <span class="panel-desc">จำนวน 1 รายการ</span>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round btn-lg" data-toggle="tooltip" data-original-title="create" onclick="location.href='/purchase-order/return-product/create'">
                    สร้าง
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
                @include('purchase-order.modal')
                <div class="panel-body container-fluid p-0">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>วันที่</th>
                                        <th>รายการ</th>
                                        <th>อ้างอิง</th>
                                        <th>ผู้ติดต่อ</th>
                                        <th>วันที่ส่งสินค้า</th>
                                        <th>มูลค่า</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>31 ม.ค. 2564</td>
                                        <td>DN-202103001</td>
                                        <td>-</td>
                                        <td>บริษัท ABC จำกัด</td>
                                        <td>
                                            <div class="text-danger">11 ก.พ. 2564</div>
                                        </td>
                                        <td>300</td>
                                        <td>
                                            <span class="badge badge-warning">รอโอน</span>
                                        </td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    onclick="location.href='/purchase-order/return-product/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDeleteReturnProduct" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
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
