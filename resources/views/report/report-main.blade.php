@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/examples/css/tables/basic.css')}}">

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
            <h1 class="page-title">ภาพรวม</h1>
        </div>
        <div class="page-content container-fluid">
            @include('report.modal')
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <div class="white">
                                    <i class="icon icon-circle icon-2x md-assignment bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <div>ยอดขายวันนี้ (บาท)</div>
                                    <span class="blue-600 float-right">-</span>
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
                                    <i class="icon icon-circle icon-2x icon md-calendar bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <div>ยอดขายเดือนนี้ (เม.ย./2564) (บาท)</div>
                                    <span class="blue-600 float-right">0.00</span>
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
                                    <i class="icon icon-circle icon-2x md-calendar-note bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <div>ยอดขายรวมทั้งปี (บาท)</div>
                                    <span class="blue-600 float-right">500,000.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <div class="white">
                                    <i class="icon icon-circle icon-2x md-dropbox bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <div>หมวดหมู่ขายดีปีนี้</div>
                                    <a href="" class="float-right">เครื่องใช้ในบ้าน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <div class="white">
                                    <i class="icon icon-circle icon-2x md-dropbox bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <div>เปรียบเทียบยอดขาย ตั้งแต่ต้นปี (YTD)</div>
                                    <span class="blue-600 float-right">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" aria-hidden="true"></i><span class="ml-10">ยอดขายรวม</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option value="1">กำไรจากการขาย</option>
                                    <option value="2">กำไรรวม</option>
                                    <option value="3" selected>ยอดขายรวม</option>
                                    <option value="4">ยอดขายตามหมวดหมู่</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form>
                                <img src="/assets/images/graph1.png" style="width: 100%">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-dropbox bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">มูลค่าสินค้าคงเหลือรายคลัง</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option value="1" selected>รายคลัง</option>
                                    <option value="2">รายหมวดหมู่</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="/assets/images/graph2.png" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สินค้าเคลื่อนไหวย้อนหลัง 7 วัน</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option value="1">วันนี้</option>
                                    <option value="2" selected>7 วัน</option>
                                    <option value="3">1 เดือน</option>
                                    <option value="4">3 เดือน</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body container-fluid p-0">
                            <div class="example-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>รหัสสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>เข้า</th>
                                            <th>ออก</th>
                                            <th>เปลี่ยนแปลง</th>
                                            <th>คงเหลือ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>P0001</td>
                                            <td>ข้อมูลตัวอย่าง 1</td>
                                            <td>13</td>
                                            <td>15</td>
                                            <td>-2</td>
                                            <td class="font-weight-bold green-600">7</td>
                                        </tr>
                                        <tr>
                                            <td>P0002</td>
                                            <td>ข้อมูลตัวอย่าง 2</td>
                                            <td>12</td>
                                            <td>21</td>
                                            <td>-9</td>
                                            <td class="font-weight-bold red-600">4</td>
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
@endsection
