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
            <h1 class="page-title">ลูกค้า</h1>
            <div class="breadcrumb">ย้อนหลัง 3 เดือน (1/1/2564 - 5/4/2564) </div>
        </div>
        <div class="page-content container-fluid">
            @include('report.modal')
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">จำนวนลูกค้า</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option value="1" selected>จำนวนลูกค้า</option>
                                    <option value="2">ยอดขาย</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="/assets/images/graph4.png" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">แนวโน้ม</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option value="1">จำนวนลูกค้า</option>
                                    <option value="2" selected>ยอดขาย</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="/assets/images/graph5.png" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <select class="form-control mr-2 w-auto">
                                    <option value="1" selected>จำนวนลูกค้า</option>
                                    <option value="2">จำนวนรายการ</option>
                                    <option value="3">มูลค่ารายการ</option>
                                </select>
                            </h3>
                        </div>
                        <div class="panel-body container-fluid p-0">
                            <div class="example-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>จังหวัด</th>
                                            <th class="text-right">จำนวนลูกค้า</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>นนทบุรี</td>
                                            <td class="text-right">4</td>
                                        </tr>
                                        <tr>
                                            <td>กรุงเทพมหานคร</td>
                                            <td class="text-right">2</td>
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
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ลูกค้า</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep d-flex">
                                <select class="form-control mr-2">
                                    <option value="1" selected>ลูกค้าใหม่</option>
                                    <option value="2">ลูกค้าซื้อเข้า</option>
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
                                            <th>ลูกค้า</th>
                                            <th class="text-right">ยอดขาย (บาท)</th>
                                            <th>ยอดขาย (%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>P0004</td>
                                            <td class="text-right">142,500</td>
                                            <td>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-primary" style="width: 84.07%;" role="progressbar">84.07%</div>
                                                </div>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>P0005</td>
                                            <td class="text-right">27,000</td>
                                            <td>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-primary" style="width: 15.93%;" role="progressbar">15.93%</div>
                                                </div>
                                            </td>
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
@endsection
