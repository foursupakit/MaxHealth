@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">

    <link rel="stylesheet" href="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">รายการขาย</h1>
            <span class="panel-desc">จำนวน 7 รายการ</span>
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
                @include('sale-order.modal')
                <div class="panel-heading nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs nav-tabs-line " role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#list" aria-controls="list" role="tab">ทั้งหมด</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#wait-pack" aria-controls="wait-pack" role="tab">รอแพ็ค (2)</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#wait-sent" aria-controls="wait-sent" role="tab">รอจัดส่ง (1)</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#send" aria-controls="send" role="tab">จัดส่งแล้ว</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#success" aria-controls="success" role="tab">เสร็จสิ้น</a></li>
                    </ul>
                </div>
                <div class="panel-body container-fluid p-0">
                    <div class="example-wrap">
                        <div class="tab-content">
                            <div class="tab-pane active" id="list" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่สั่งสินค้า</th>
                                            <th>รายการ</th>
                                            <th>ลูกค้า</th>
                                            <th>วันที่ส่งสินค้า</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/1">SO-202101001</a></td>
                                            <td><a href="/contact/detail">บริษัท Shippop จำกัด</a></td>
                                            <td></td>
                                            <td>6,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอแพ็ค</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-original-title="ลบ"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/2">SO-202101002</a></td>
                                            <td>-</td>
                                            <td></td>
                                            <td>30,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอแพ็ค</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/3">SO-202101003</a></td>
                                            <td><a href="/contact/detail">บริษัท ABC จำกัด</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>28,500</td>
                                            <td>
                                                <span class="badge badge-warning">รอจัดส่ง</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/3">SO-202101004</a></td>
                                            <td><a href="/contact/detail">คุณสมชาย</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>27,000</td>
                                            <td>
                                                <span class="badge badge-warning">จัดส่งแล้ว</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/3">SO-202101005</a></td>
                                            <td><a href="/contact/detail">ร้านค้าปลีก นนทบุรี</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>142,500</td>
                                            <td>
                                                <span class="badge badge-warning">จัดส่งแล้ว</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/3">SO-202101006</a></td>
                                            <td><a href="/contact/detail">คุณเปิ้ล</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>21,700</td>
                                            <td>
                                                <span class="badge badge-success">เสร็จสิ้น</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/3">SO-202101007</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>40,000</td>
                                            <td>
                                                <span class="badge badge-success">เสร็จสิ้น</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
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
                            <div class="tab-pane" id="wait-pack" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่สั่งสินค้า</th>
                                            <th>รายการ</th>
                                            <th>ลูกค้า</th>
                                            <th>วันที่ส่งสินค้า</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/1">SO-202101001</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td></td>
                                            <td>6,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอแพ็ค</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/2">SO-202101002</a></td>
                                            <td>-</td>
                                            <td></td>
                                            <td>30,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอแพ็ค</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
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
                            <div class="tab-pane" id="wait-sent" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่สั่งสินค้า</th>
                                            <th>รายการ</th>
                                            <th>ลูกค้า</th>
                                            <th>วันที่ส่งสินค้า</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/sale-order/detail/3">SO-202101003</a></td>
                                            <td><a href="/contact/detail">บริษัท ABC จำกัด</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>28,500</td>
                                            <td>
                                                <span class="badge badge-warning">รอจัดส่ง</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
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
                            <div class="tab-pane" id="send" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่สั่งสินค้า</th>
                                            <th>รายการ</th>
                                            <th>ลูกค้า</th>
                                            <th>วันที่ส่งสินค้า</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">SO-202101004</a></td>
                                            <td><a href="/contact/detail">คุณสมชาย</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>27,000</td>
                                            <td>
                                                <span class="badge badge-warning">จัดส่งแล้ว</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">SO-202101005</a></td>
                                            <td><a href="/contact/detail">ร้านค้าปลีก นนทบุรี</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>142,500</td>
                                            <td>
                                                <span class="badge badge-warning">จัดส่งแล้ว</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
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
                            <div class="tab-pane" id="success" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่สั่งสินค้า</th>
                                            <th>รายการ</th>
                                            <th>ลูกค้า</th>
                                            <th>วันที่ส่งสินค้า</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">SO-202101006</a></td>
                                            <td><a href="/contact/detail">คุณเปิ้ล</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>21,700</td>
                                            <td>
                                                <span class="badge badge-success">เสร็จสิ้น</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDelete" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">SO-202101007</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>40,000</td>
                                            <td>
                                                <span class="badge badge-success">เสร็จสิ้น</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalPrint" data-toggle="modal">
                                                    <i class="icon md-file" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="แก้ไข" onclick="location.href='/sale-order/edit'">
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

    <script src="../../../global/js/Plugin/peity.js"></script>
    <script src="../../../global/js/Plugin/asselectable.js"></script>
    <script src="../../../global/js/Plugin/selectable.js"></script>
    <script src="../../../global/js/Plugin/table.js"></script>

    <!-- datepicker -->
    <script src="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../../global/js/Plugin/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker('setDate', new Date());

            $('.adjestheading2').css('display', 'none');
            $('.adjusttransactionnumberarea').css('display', 'none');
            $('.adjustdate').css('display', 'none');
        });

        $(function() {
            $('input[type=radio][name=inputRadiosPaper]').change(function() {
                var radioValue = $(this).val();
                if(radioValue === 'a4'){
                    $('.adjustformatpaper').css('display', 'flex');
                    $('.adjestheading1').css('display', 'flex');
                    $('.adjestheading2').css('display', 'none');
                } else if(radioValue === 'a5'){
                    $('.adjustformatpaper').css('display', 'none');
                    $('.adjestheading1').css('display', 'flex');
                    $('.adjestheading2').css('display', 'none');
                } else if(radioValue === 'recript'){
                    $('.adjustformatpaper').css('display', 'none');
                    $('.adjestheading1').css('display', 'none');
                    $('.adjestheading2').css('display', 'flex');
                }
            });

            $('#inputChecked').change(function() {
                var radioValue = $("#inputChecked:checked").val();
                if(radioValue){
                    $('.adjusttransactionnumberarea').css('display', 'flex');
                    $('.adjustdate').css('display', 'flex');
                } else {
                    $('.adjusttransactionnumberarea').css('display', 'none');
                    $('.adjustdate').css('display', 'none');
                }
            });
        });
    </script>
@endsection
