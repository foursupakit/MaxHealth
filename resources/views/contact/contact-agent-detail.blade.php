@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/examples/css/tables/basic.css')}}">

    <link rel="stylesheet" href="{{asset('global/vendor/chartist/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/examples/css/widgets/chart.css')}}">

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
                            <!-- Panel Bar Withfooter -->
                            <div class="card card-shadow" id="chartBarWithfooter">
                                <div class="card-block p-0">
                                    <div class="p-30">
                                        <div class="font-size-20 mb-20">
                                            ยอดขายรวม
                                            <span class="float-right"><i class="icon md-caret-up red-600 mr-10" aria-hidden="true"></i>2,250</span>
                                        </div>
                                        <div class="ct-chart h-100"></div>
                                    </div>
                                    <div class="text-center px-30 py-15" style="border-top:1px solid #e9eaeb">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="counter">
{{--                                                        <span class="counter-number">1,230</span>--}}
                                                    <div class="counter-bottom text-uppercase">ธ.ค./2563</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="counter">
{{--                                                        <span class="counter-number">470</span>--}}
                                                    <div class="counter-bottom text-uppercase">ม.ค./2564</div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="counter">
{{--                                                        <span class="counter-number">50</span>--}}
                                                    <div class="counter-bottom text-uppercase">ก.พ./2564</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Bar Withfooter -->
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
                                                <td>
                                                    <a href="#">ข้อมูลตัวอย่าง 7(M)</a>
                                                </td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">0</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="#">ข้อมูลตัวอย่าง 7(S)</a>
                                                </td>
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
                            <!-- Panel Pie -->
                            <div class="card" id="chartPie">
                                <div class="card-block p-0 p-30 h-full">
                                    <div class="ct-chart h-250"></div>
                                    <div class="row no-space mt-40">
                                        <div class="col-4">
                                            <div class="counter">
                                                <div class="counter-number-group font-size-14">
                                                    <span class="counter-number-related">
                                                      <span class="icon md-circle purple-600"></span>
                                                    </span>
                                                    <span class="counter-number font-size-24">35%</span>
                                                </div>
                                                <div class="counter-label text-uppercase">ข้อมูลตัวอย่าง 6</div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="counter">
                                                <div class="counter-number-group font-size-14">
                                                    <span class="counter-number-related">
                                                      <span class="icon md-circle red-600"></span>
                                                    </span>
                                                    <span class="counter-number font-size-24">20%</span>
                                                </div>
                                                <div class="counter-label text-uppercase">ข้อมูลตัวอย่าง 7(M)</div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="counter text-center">
                                                <div class="counter-number-group font-size-14">
                                                    <span class="counter-number-related">
                                                      <span class="icon md-circle blue-600"></span>
                                                    </span>
                                                    <span class="counter-number font-size-24">45%</span>
                                                </div>
                                                <div class="counter-label text-uppercase">ข้อมูลตัวอย่าง 7(S)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Pie -->
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
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                บิลการชำระเงิน
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
                                            <th>รายการ</th>
                                            <th>วันที่เริ่มต้น</th>
                                            <th>วันที่สิ้นสุด</th>
                                            <th>ยอดขาย</th>
                                            <th>คอมมิชชั่น</th>
                                            <th>สถานะ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <td colspan="100%" class="text-center">
                                            ไม่มีข้อมูล
                                        </td>
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
    <script src="{{asset('global/vendor/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>

    <!-- Page -->
    <script src="{{asset('global/js/Plugin/peity.js')}}"></script>
    <script src="{{asset('global/js/Plugin/asselectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/selectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/table.js')}}"></script>

    <script src="{{asset('global/js/Plugin/matchheight.js')}}"></script>
    <script src="{{asset('assets/examples/js/widgets/chart.js')}}"></script>
@endsection
