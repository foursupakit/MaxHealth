@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">
    <link rel="stylesheet" href="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }

        .form-group.row {
            margin-bottom: 0.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">รายการอนุมัติการถอดเงิน</h1>
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
                @include('contact.modal')
                <div class="panel-heading nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs nav-tabs-line " role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#list" aria-controls="list" role="tab">ทั้งหมด</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#wait-transfer" aria-controls="wait-transfer" role="tab">รอดำเนินการ (2)</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#success" aria-controls="success" role="tab">สำเร็จ</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#false" aria-controls="false" role="tab">ไม่สำเร็จ</a></li>
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
                                            <th>วันที่ทำรายการ</th>
                                            <th>รายการ</th>
                                            <th>ชื่อตัวแทนจำหน่าย</th>
                                            <th>จำนวนเงิน</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/purchase-order/detail/1">AW-202101001</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>6,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอดำเนินการ</span>
                                            </td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalPayment" data-toggle="modal">รอชำระ</a>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/purchase-order/detail/2">AW-202101002</a></td>
                                            <td>-</td>
                                            <td>30,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอดำเนินการ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">รอชำระ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/purchase-order/detail/3">AW-202101003</a></td>
                                            <td><a href="/contact/detail">บริษัท ABC จำกัด</a></td>
                                            <td>28,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101004</a></td>
                                            <td><a href="/contact/detail">คุณสมชาย</a></td>
                                            <td>27,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101005</a></td>
                                            <td><a href="/contact/detail">ร้านค้าปลีก นนทบุรี</a></td>
                                            <td>142,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101006</a></td>
                                            <td><a href="/contact/detail">คุณเปิ้ล</a></td>
                                            <td>21,700</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101007</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>40,000</td>
                                            <td>
                                                <span class="badge badge-danger">ไม่สำเร็จ</span>
                                            </td>
                                            <td>
                                                -
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
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
                                            <th>วันที่ทำรายการ</th>
                                            <th>รายการ</th>
                                            <th>ชื่อตัวแทนจำหน่าย</th>
                                            <th>จำนวนเงิน</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101001</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>6,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอดำเนินการ</span>
                                            </td>
                                            <td>
                                                <a href="" class="badge badge-warning" data-target="#modalPayment" data-toggle="modal">รอชำระ</a>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/purchase-order/detail/2">AW-202101002</a></td>
                                            <td>-</td>
                                            <td>30,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอดำเนินการ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">รอชำระ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
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
                                            <th>วันที่ทำรายการ</th>
                                            <th>รายการ</th>
                                            <th>ชื่อตัวแทนจำหน่าย</th>
                                            <th>จำนวนเงิน</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="/purchase-order/detail/3">AW-202101003</a></td>
                                            <td><a href="/contact/detail">บริษัท ABC จำกัด</a></td>
                                            <td>28,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101004</a></td>
                                            <td><a href="/contact/detail">คุณสมชาย</a></td>
                                            <td>27,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101005</a></td>
                                            <td><a href="/contact/detail">ร้านค้าปลีก นนทบุรี</a></td>
                                            <td>142,500</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101006</a></td>
                                            <td><a href="/contact/detail">คุณเปิ้ล</a></td>
                                            <td>21,700</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="false" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>วันที่ทำรายการ</th>
                                            <th>รายการ</th>
                                            <th>ชื่อตัวแทนจำหน่าย</th>
                                            <th>จำนวนเงิน</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>27 ม.ค. 2564</td>
                                            <td><a href="javascript:void(0)">AW-202101007</a></td>
                                            <td><a href="/contact/detail">ร้านค้า บางเขน</a></td>
                                            <td>40,000</td>
                                            <td>
                                                <div class="badge badge-danger" data-toggle="modal">ไม่สำเร็จ</div>
                                            </td>
                                            <td>
                                                -
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditApproveWithdrawal" data-toggle="modal">
                                                    <i class="icon md-menu" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteApproveWithdrawal" data-toggle="modal">
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

    <!-- datepicker -->
    <script src="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../../global/js/Plugin/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker('setDate', new Date());

            $('.adjustTax').css('display', 'none');
        });

        $(function() {
            $('input[type=checkbox][name=settingTax]').change(function() {
                var checkboxValue = $(this).is(':checked');
                if(checkboxValue){
                    $('.adjustTax').css('display', 'block');
                } else {
                    $('.adjustTax').css('display', 'none');
                }
            });
        });
    </script>
@endsection
