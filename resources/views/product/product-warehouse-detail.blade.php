@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/examples/css/tables/basic.css">

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
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/product/warehouse"><i class="icon md-chevron-left" aria-hidden="true">คลังสินค้า/สาขา</i></a></li>
            </ol>
            <h1 class="page-title">คลังสินค้าหลัก</h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-light btn-round btn-lg" data-toggle="tooltip" data-original-title="export excel">
                    นำเข้าไฟล์ (Excel)
                </button>
                <button type="button" class="btn btn-primary btn-round btn-lg" data-toggle="tooltip" onclick="location.href='/product/create'">
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
                @include('product.modal')
                <div class="panel-heading nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs nav-tabs-line " role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#list" aria-controls="list" role="tab">มีสินค้าในสต๊อก</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#out-of-stock" aria-controls="out-of-stock" role="tab">สินค้าหมด</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#expired-product" aria-controls="expired-product" role="tab">สินค้าหมดอายุ</a></li>
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
                                            <th>#</th>
                                            <th>รหัส</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคาขาย</th>
                                            <th>คงเหลือ</th>
                                            <th>พร้อมขาย</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="/purchase-order/detail/1">P0001-1</a></td>
                                            <td class="d-flex">
                                                <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                                <div>
                                                    <span>เสื้อ(s)</span><br>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>600</td>
                                            <td>
                                                <div class="text-success font-weight-600">19 ตัว</div>
                                            </td>
                                            <td>
                                                <div class="text-success font-weight-600">19 ตัว</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditWarehouseProduct" data-toggle="modal">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteWarehouseProduct" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="/purchase-order/detail/1">P0001-2</a></td>
                                            <td class="d-flex">
                                                <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                                <div>
                                                    <span>เสื้อ(m)</span><br>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>600</td>
                                            <td>
                                                <div class="text-warning font-weight-600">4 ตัว</div>
                                            </td>
                                            <td>
                                                <div class="text-warning font-weight-600">4 ตัว</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditWarehouseProduct" data-toggle="modal">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteWarehouseProduct" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="out-of-stock" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>#</th>
                                            <th>รหัส</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคาขาย</th>
                                            <th>คงเหลือ</th>
                                            <th>พร้อมขาย</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="/purchase-order/detail/1">P0001-3</a></td>
                                            <td class="d-flex">
                                                <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                                <div>
                                                    <span>เสื้อ(l)</span><br>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>600</td>
                                            <td>
                                                <div class="text-danger font-weight-600">0 ตัว</div>
                                            </td>
                                            <td>
                                                <div class="text-danger font-weight-600">0 ตัว</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditWarehouseProduct" data-toggle="modal">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteWarehouseProduct" data-toggle="modal">
                                                    <i class="icon md-delete" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="expired-product" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>#</th>
                                            <th>รหัส</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคาขาย</th>
                                            <th>คงเหลือ</th>
                                            <th>พร้อมขาย</th>
                                            <th>วันที่หมดอายุ</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="/purchase-order/detail/1">P0001-3</a></td>
                                            <td class="d-flex">
                                                <img src="/assets/images/cloth.jpg" width="50" class="mr-1">
                                                <div>
                                                    <span>เสื้อ(xl)</span><br>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>600</td>
                                            <td>
                                                <div class="text-success font-weight-600">10 ตัว</div>
                                            </td>
                                            <td>
                                                <div class="text-success font-weight-600">10 ตัว</div>
                                            </td>
                                            <td class="text-danger">
                                                27 ม.ค. 2564
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalEditWarehouseProduct" data-toggle="modal">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                        data-target="#modalDeleteWarehouseProduct" data-toggle="modal">
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
@endsection
