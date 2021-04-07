@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/examples/css/tables/basic.css')}}">

    <!-- datepicker -->
    <link rel="stylesheet" href="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">

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
            <h1 class="page-title">สินค้า</h1>
        </div>
        <div class="page-content container-fluid">
            @include('report.modal')
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สรุปมูลค่าสินค้าทั้งหมด</span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="text-center d-flex justify-content-center align-items-center" style="min-height:370px;">
                                    <div class="d-block example">
                                        <div class="d-flex">
                                            <h1 href="/product/warehouse" class="blue-600">338,400</h1>
                                            <span class="align-self-center ml-10">บาท</span><br>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-dark" data-target="#modalExportExcel" data-toggle="modal"><i class="icon md-download" aria-hidden="true"></i> Download Excel</button>
                                        </div>
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
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">มูลค่าสินค้าคงเหลือรายคลัง</span>
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
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สินค้าจม</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep d-flex">
                                <select class="form-control mr-2">
                                    <option value="1">สินค้าจมที่ขายไม่ได้มากกว่า 7 วัน</option>
                                    <option value="2">สินค้าจมที่ขายไม่ได้มากกว่า 1 เดือน</option>
                                    <option value="3" selected>สินค้าจมที่ขายไม่ได้มากกว่า 3 เดือน</option>
                                    <option value="4">สินค้าจมที่ขายไม่ได้มากกว่า 6 เดือน</option>
                                    <option value="5">สินค้าจมที่ขายไม่ได้มากกว่า 1 ปี</option>
                                </select>
                                <div class="input-search input-group-sm m-0" style="width: 100%;">
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
                                            <th>รหัสสินค้า</th>
                                            <th>สินค้า</th>
                                            <th>วันที่ขายล่าสุด</th>
                                            <th>จำนวนคงเหลือ</th>
                                            <th>มูลค่าสินค้าคงเหลือ (บาท)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>P0001</td>
                                            <td>
                                                <div style="display: grid;">
                                                    <a href="">เสื้อ</a>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>22 ธ.ค. 2563</td>
                                            <td>16</td>
                                            <td>3,200</td>
                                        </tr>
                                        <tr>
                                            <td>P0002</td>
                                            <td>
                                                <div style="display: grid;">
                                                    <a href="">เสื้อ</a>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>10 ต.ค. 2563</td>
                                            <td>13</td>
                                            <td>97,500</td>
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
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สินค้าใกล้หมด</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep d-flex">
                                <select class="form-control mr-2">
                                    <option value="1" selected>สินค้าใกล้มหมด</option>
                                    <option value="2">สินค้าหมด</option>
                                </select>
                                <select class="form-control mr-2">
                                    <option value="1" selected>ทั้งหมด</option>
                                    <option value="2">คลังสินค้าหลัก</option>
                                    <option value="3">เครื่องแต่งกาย</option>
                                    <option value="4">เครื่องใช้ในบ้าน</option>
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
                                            <th>สินค้า</th>
                                            <th class="text-right">จำนวนคงเหลือ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>P0003</td>
                                            <td>
                                                <div style="display: grid;">
                                                    <a href="">เสื้อ</a>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td class="text-right">16</td>
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
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ล็อตใกล้หมดอายุ</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control mr-2">
                                    <option value="1" selected>ทั้งหมด</option>
                                    <option value="2">คลังสินค้าหลัก</option>
                                    <option value="3">เครื่องแต่งกาย</option>
                                    <option value="4">เครื่องใช้ในบ้าน</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body container-fluid p-0">
                            <div class="example-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>ล็อต</th>
                                            <th>รหัสสินค้า</th>
                                            <th>สินค้า</th>
                                            <th>วันหมดอายุ</th>
                                            <th class="text-right">จำนวนคงเหลือ</th>
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
    <!-- Page -->
    <script src="{{asset('global/js/Plugin/peity.js')}}"></script>
    <script src="{{asset('global/js/Plugin/asselectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/selectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/table.js')}}"></script>

    <!-- datepicker -->
    <script src="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../../global/js/Plugin/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker('setDate', new Date());
        });
    </script>
@endsection
