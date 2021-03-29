@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }

        .pointer {
            cursor: pointer;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: initial;
        }
        .table-striped tbody tr:nth-of-type(2n) {
            background-color: rgba(238,238,238,.3);
        }

        .form-group.row {
            margin-bottom: 0.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/contact/agent/list"><i class="icon md-chevron-left" aria-hidden="true">ตัวแทนจำหน่าย</i></a></li>
            </ol>
            <h1 class="page-title">รายละเอียดตัวแทนจำหน่าย</h1>
        </div>
        <div class="page-content container-fluid">
            @include('contact.modal')
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ข้อมูลตัวอย่าง 1</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        คำสั่ง
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/contact/agent/edit">แก้ไข</a>
                                        <a class="dropdown-item pointer" data-target="#modalDeleteAgent" data-toggle="modal">ลบ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div>ชื่อบริษัท</div>
                                        <div>บริษัท shippop จำกัด</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div>เบอร์โทรศัพท์</div>
                                        <div>0812345678</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div>อีเมล</div>
                                        <div>you@zortshop.com</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div>ที่อยู่</div>
                                        <div>123 วัดชลอ บางกรวย นนทบุรี 11130</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ยอดขายรวม</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <i class="icon icon-circle md-chart" style="pointer-events: none;" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สินค้าขายดีย้อนหลัง 7 วัน</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option>วันนี้</option>
                                    <option selected>7 วัน</option>
                                    <option>1 เดือน</option>
                                    <option>3 เดือน</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-body container-fluid p-0">
                                <div class="example-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                            <thead class="bg-grey-100">
                                            <tr>
                                                <th>#</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>จำนวนที่ขายได้	</th>
                                                <th>ยอดขาย</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">ข้อมูลตัวอย่าง 6</a>
                                                </td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">30,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <a href="#">ข้อมูลตัวอย่าง 7(M)</a>
                                                <td class="text-right">0</td>
                                                <td class="text-right">0</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ยอดขาย รายสินค้า</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option>รายสินค้า</option>
                                    <option>รายหมวดหมู่</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                รายการทั้งหมด
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <div class="input-search input-group-sm" style="width: 100%;">
                                    <button type="submit" class="input-search-btn">
                                        <i class="icon md-search" aria-hidden="true"></i>
                                    </button>
                                    <input type="text" class="form-control" name="" placeholder="พิมพ์คำค้นหา...">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body container-fluid p-0">
                            <div class="example-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>#</th>
                                            <th>ประเภท</th>
                                            <th>รายการ</th>
                                            <th>วันที่</th>
                                            <th>มูลค่า</th>
                                            <th>สถานะ</th>
                                            <th>ชำระเงิน</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ซื้อเข้า</td>
                                            <td><a href="javascript:void(0)">PO-202101001</a></td>
                                            <td>27 ม.ค. 2564</td>
                                            <td>105,000</td>
                                            <td>
                                                <span class="badge badge-warning">รอโอน</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">รอชำระ</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ขายออก</td>
                                            <td><a href="javascript:void(0)">SO-202101002</a></td>
                                            <td>16 ธ.ค. 2563</td>
                                            <td>40,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
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
    <!-- Page -->
    <script src="../../../global/js/Plugin/peity.js"></script>
    <script src="../../../global/js/Plugin/asselectable.js"></script>
    <script src="../../../global/js/Plugin/selectable.js"></script>
    <script src="../../../global/js/Plugin/table.js"></script>
@endsection
