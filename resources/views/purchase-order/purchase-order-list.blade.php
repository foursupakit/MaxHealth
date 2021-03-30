@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">
    <link rel="stylesheet" href="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }

        .btn:not(:last-child) {
            margin-right: 0.25rem;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">รายการซื้อ</h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-primary btn-round btn-lg" data-toggle="tooltip" data-original-title="create" onclick="location.href='/purchase-order/create'">
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
                <div class="panel-heading nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs nav-tabs-line " role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#list" aria-controls="list" role="tab">ทั้งหมด</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#wait-transfer" aria-controls="wait-transfer" role="tab">รอโอน (2)</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#wait-pay" aria-controls="wait-pay" role="tab">รอชำระ (1)</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#success" aria-controls="success" role="tab">สำเร็จ</a></li>
                    </ul>
                    {{--                    <div class="panel-actions">--}}
                    {{--                        <a class="panel-action icon md-delete" data-toggle="tooltip" data-original-title="move to trash"--}}
                    {{--                           data-container="body" title=""></a>--}}
                    {{--                    </div>--}}
                </div>
                <div class="panel-body container-fluid p-0">
                    <div class="example-wrap">
                        <div class="tab-content">
                            <div class="tab-pane active" id="list" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่ออกใบสั่งซื้อ</th>
                                            <th>รายการ</th>
                                            <th>ผู้ติดต่อ</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/purchase-order/detail/1">PO-202101001</a></td>
                                            <td><a href="/contact/detail">บริษัท Shippop จำกัด</a></td>
                                            <td>6,000</td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalStatus" data-toggle="modal">รอโอน</a>
                                            </td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalPayment" data-toggle="modal">รอชำระ</a>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit/1'">
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
                                            <td><a href="/purchase-order/detail/2">PO-202101002</a></td>
                                            <td>-</td>
                                            <td>30,000</td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalStatus" data-toggle="modal">รอโอน</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">ชำระบางส่วน</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit/2'">
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
                                            <td><a href="/purchase-order/detail/3">PO-202101003</a></td>
                                            <td><a href="/contact/detail">บริษัท ABC จำกัด</a></td>
                                            <td>28,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit/3'">
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
                                            <td><a href="javascript:void(0)">PO-202101004</a></td>
                                            <td><a href="/contact/detail">คุณสมชาย</a></td>
                                            <td>27,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <td><a href="javascript:void(0)">PO-202101005</a></td>
                                            <td><a href="/contact/detail">ร้านค้าปลีก นนทบุรี</a></td>
                                            <td>142,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <td><a href="javascript:void(0)">PO-202101006</a></td>
                                            <td><a href="/contact/detail">คุณเปิ้ล</a></td>
                                            <td>21,700</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <td><a href="javascript:void(0)">PO-202101007</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>40,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                            <div class="tab-pane" id="wait-transfer" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่ออกใบสั่งซื้อ</th>
                                            <th>รายการ</th>
                                            <th>ผู้ติดต่อ</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">PO-202101001</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>6,000</td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalStatus" data-toggle="modal">รอโอน</a>
                                            </td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalPayment" data-toggle="modal">รอชำระ</a>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <td><a href="/purchase-order/detail/2">PO-202101002</a></td>
                                            <td>-</td>
                                            <td>30,000</td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalStatus" data-toggle="modal">รอโอน</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">ชำระบางส่วน</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit/2'">
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
                            <div class="tab-pane" id="wait-pay" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่ออกใบสั่งซื้อ</th>
                                            <th>รายการ</th>
                                            <th>ผู้ติดต่อ</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">PO-202101001</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>6,000</td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalStatus" data-toggle="modal">รอโอน</a>
                                            </td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalPayment" data-toggle="modal">รอชำระ</a>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <th>วันที่ออกใบสั่งซื้อ</th>
                                            <th>รายการ</th>
                                            <th>ผู้ติดต่อ</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/purchase-order/detail/3">PO-202101003</a></td>
                                            <td><a href="/contact/detail">บริษัท ABC จำกัด</a></td>
                                            <td>28,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit/3'">
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
                                            <td><a href="javascript:void(0)">PO-202101004</a></td>
                                            <td><a href="/contact/detail">คุณสมชาย</a></td>
                                            <td>27,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <td><a href="javascript:void(0)">PO-202101005</a></td>
                                            <td><a href="/contact/detail">ร้านค้าปลีก นนทบุรี</a></td>
                                            <td>142,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <td><a href="javascript:void(0)">PO-202101006</a></td>
                                            <td><a href="/contact/detail">คุณเปิ้ล</a></td>
                                            <td>21,700</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
                                            <td><a href="javascript:void(0)">PO-202101007</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>40,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default" data-toggle="tooltip"
                                                        data-original-title="Edit" onclick="location.href='/purchase-order/edit'">
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
        });
    </script>
@endsection
