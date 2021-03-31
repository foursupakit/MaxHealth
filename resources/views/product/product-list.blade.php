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
            <h1 class="page-title">สินค้า</h1>
            <span class="panel-desc">จัดการรูปภาพสินค้า</span>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round btn-lg" data-toggle="tooltip" data-original-title="create" onclick="location.href='/product/create'">
                    เพิ่มสินค้าใหม่
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
                <div class="panel-body container-fluid p-0">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>รหัส</th>
                                        <th>ชื่อสินค้า</th>
                                        <th>ราคาซื้อ</th>
                                        <th>ราคาขาย</th>
                                        <th>คงเหลือ</th>
                                        <th>พร้อมขาย</th>
                                        <th width="10%"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>P0001-1</td>
                                        <td class="d-flex">
                                            <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                            <div>
                                                <a href="">
                                                    <span class="blue-700">เสื้อ</span><br>
                                                </a>
                                                <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                            </div>
                                        </td>
                                        <td>300 บาท</td>
                                        <td>400 บาท</td>
                                        <td>60 ตัว</td>
                                        <td>50 ตัว</td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Preview">
                                                <i class="icon md-eye text-success" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDelete" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>P0001-2</td>
                                        <td class="d-flex">
                                            <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                            <div>
                                                <a href="">
                                                    <span class="blue-700">เสื้อ</span><br>
                                                </a>
                                                <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                            </div>
                                        </td>
                                        <td>300 บาท</td>
                                        <td>400 บาท</td>
                                        <td>60 ตัว</td>
                                        <td>50 ตัว</td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Not Preview">
                                                <i class="icon md-eye-off text-danger" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDelete" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-nowrap">
                                        <td>3</td>
                                        <td>P0001-3</td>
                                        <td class="d-flex">
                                            <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                            <div>
                                                <a href="">
                                                    <span class="blue-700">เสื้อ</span><br>
                                                </a>
                                                <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                            </div>
                                        </td>
                                        <td>300 บาท</td>
                                        <td>400 บาท</td>
                                        <td>60 ตัว</td>
                                        <td>50 ตัว</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Preview">
                                                <i class="icon md-eye text-success" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDelete" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>P0001-4</td>
                                        <td class="d-flex">
                                            <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                            <div>
                                                <a href="">
                                                    <span class="blue-700">เสื้อ</span><br>
                                                </a>
                                                <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                            </div>
                                        </td>
                                        <td>300 บาท</td>
                                        <td>400 บาท</td>
                                        <td>60 ตัว</td>
                                        <td>50 ตัว</td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Preview">
                                                <i class="icon md-eye text-success" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDelete" data-toggle="modal">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>P0001-5</td>
                                        <td class="d-flex">
                                            <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                            <div>
                                                <a href="">
                                                    <span class="blue-700">เสื้อ</span><br>
                                                </a>
                                                <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                            </div>
                                        </td>
                                        <td>300 บาท</td>
                                        <td>400 บาท</td>
                                        <td>60 ตัว</td>
                                        <td>50 ตัว</td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="Preview">
                                                <i class="icon md-eye text-success" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                    data-original-title="แก้ไข" onclick="location.href='/product/edit'">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                    data-target="#modalDelete" data-toggle="modal">
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

    <!-- Modal Delete -->
    <div class="modal fade" id="modalDelete" aria-hidden="true" aria-labelledby="modalDelete"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h3 class="modal-title">ลบสินค้า</h3>
                </div>
                <div class="modal-body">
                    <p>ยืนยันการลบสินค้าใช่หรือไม่ ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-primary">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
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
