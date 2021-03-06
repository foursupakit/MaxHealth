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
            <h1 class="page-title">คลังสินค้า/สาขา</h1>
            <span class="panel-desc">จำนวน 3 รายการ</span>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round btn-lg" data-target="#modalCreateWarehouse" data-toggle="modal">
                    เพิ่มคลังสินค้า/สาขา
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
                @include('product.modal')
                <div class="panel-body container-fluid p-0">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>รหัส</th>
                                        <th width="40%">ชื่อคลัง/สาขา</th>
                                        <th>ประเภท</th>
                                        <th>มูลค่าสินค้าคงเหลือ</th>
                                        <th>เคลื่อนไหวล่าสุด</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>W0001</td>
                                        <td><a href="/product/warehouse/1">คลังสินค้าหลัก</a></td>
                                        <td>ทั่วไป</td>
                                        <td>96,600</td>
                                        <td>27 ม.ค. 2564 16:35</td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/warehouse/edit/1'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDeleteWarehouse" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>W0002</td>
                                        <td><a href="/product/warehouse/1">สาขาพระราม 9</a></td>
                                        <td>ทั่วไป</td>
                                        <td>20,900</td>
                                        <td>27 ม.ค. 2564 16:39</td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/warehouse/edit/1'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDeleteWarehouse" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>W0003</td>
                                        <td><a href="/product/warehouse/1">สาขานนทบุรี</a></td>
                                        <td>ทั่วไป</td>
                                        <td>220,900</td>
                                        <td>27 ม.ค. 2564 16:39</td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/warehouse/edit/1'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDeleteWarehouse" data-toggle="modal">
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
