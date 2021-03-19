@extends('layout.main')

@section('style')
    <!-- Plugin -->
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
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/sale-order"><i class="icon md-chevron-left" aria-hidden="true">ผู้ติดต่อ</i></a></li>
            </ol>
            <h1 class="page-title">รายละเอียดผู้ติดต่อ (รหัส : C0007)</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <div class="white">
                                    <i class="icon icon-circle icon-2x md-assignment bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <div>ยอดขายเดือนนี้ (บาท)</div>
                                    <span class="blue-500 float-right">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <div class="white">
                                    <i class="icon icon-circle icon-2x icon md-calendar bg-green-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <div>ยอดขายปีนี้ (บาท)</div>
                                    <span class="green-500 float-right">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <div class="white">
                                    <i class="icon icon-circle icon-2x md-money bg-red-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <div>ยอดค้างชำระ (บาท)</div>
                                    <span class="red-500 float-right">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <div class="media col-md-12">
                                        <div class="pr-20">
                                            <a class="avatar avatar-lg" href="javascript:void(0)">
                                                <img class="img-fluid" src="../../global/portraits/1.jpg"
                                                     alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-5"><i class="icon bd-facebook mr-10"></i>Your Facebook</h5>
                                            <h5 class="mt-0 mb-5"><img src="/assets/images/line.png" width="15" class="mr-10">Your Line</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ชื่อบริษัท</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">บริษัท shippop จำกัด</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">เบอร์โทรศัพท์</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">0123456789</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">อีเมล</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">you@email.com</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ที่อยู่บริษัท</label>
                                    <div class="col-md-9">
                                        <p class="form-control-plaintext">234 แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพมหานคร 10220</p>
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
                                <i class="white icon icon-circle md-trending-up bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ยอดขายรายสินค้า</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option>รายสินค้า</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
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
                                                <div class="counter-label text-uppercase">เก้าอี้โซฟา</div>
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
                                                <div class="counter-label text-uppercase">เตียงใหญ่</div>
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
                                                <div class="counter-label text-uppercase">เก้าอี้ไม้</div>
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
                                <i class="icon icon-circle md-assignment white bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">รายการ</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep d-inline-flex">
                                <select class="form-control input-search mr-10">
                                    <option>รายการซื้อขายทั้งหมด</option>
                                    <option>ซื้อเข้า</option>
                                    <option>ขายออก</option>
                                </select>
                                <div class="input-search input-group-sm" style="width: 100%;">
                                    <button type="submit" class="input-search-btn">
                                        <i class="icon md-search" aria-hidden="true"></i>
                                    </button>
                                    <input type="text" class="form-control" name="" placeholder="Search...">
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
                                        <tr>
                                            <td>3</td>
                                            <td>ขายออก</td>
                                            <td><a href="javascript:void(0)">SO-202101003</a></td>
                                            <td>22 พ.ย. 2563</td>
                                            <td>30,000</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>ขายออก</td>
                                            <td><a href="javascript:void(0)">SO-202101004</a></td>
                                            <td>22 ต.ค. 2563</td>
                                            <td>84,600</td>
                                            <td>
                                                <span class="badge badge-success">สำเร็จ</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">ชำระครบ</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>ขายออก</td>
                                            <td><a href="javascript:void(0)">SO-202101005</a></td>
                                            <td>23 ก.ย. 2563</td>
                                            <td>10,200</td>
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
    <script src="{{asset('global/js/Plugin/peity.js')}}"></script>
    <script src="{{asset('global/js/Plugin/asselectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/selectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/table.js')}}"></script>

    <script src="{{asset('global/vendor/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>

    <script src="{{asset('global/js/Plugin/matchheight.js')}}"></script>
    <script src="{{asset('assets/examples/js/widgets/chart.js')}}"></script>
@endsection
